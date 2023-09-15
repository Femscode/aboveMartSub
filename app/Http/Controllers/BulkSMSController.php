<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\ContactGroup;
use Illuminate\Http\Request;
use App\Imports\ContactImport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;

class BulkSMSController extends Controller
{
    //
    public function index()
    {
        $data['user'] = $user = Auth::user();
        $data['contacts'] = ContactGroup::where('user_id', $user->id)->latest()->get();
        return view('bulksms.index', $data);
    }
    public function contactGroup()
    {
        $data['user'] = $user = Auth::user();
        $data['contacts'] = ContactGroup::where('user_id', $user->id)->latest()->get();
        return view('bulksms.contact_group', $data);
    }

    public function saveContacts(Request $rq)
    {
        try {
            $user = Auth::user();

            $this->validate($rq, [
                'name' => 'required',
                'description' => 'required',
                // 'contacts' => 'required',
            ]);

            $data = $rq->all();
            $data['user_id'] = $user->id;
            if ($rq->has('import_file')) {
                $contacts =  Excel::toArray(new ContactImport($user->id, $rq->sender_name, $rq->message),  $rq->import_file)[0];
                $contact = [];

                foreach ($contacts as $subContact) {
                    foreach ($subContact as $value) {
                        if (Str::length($value) == 10) {
                            $value = "0" . $value;
                            $contact[] = $value;
                        } elseif (Str::length($value) == 11 || Str::length($value) == 13 || Str::length($value) == 14) {
                            $contact[] = $value;
                        } else {
                            $value = null;
                        }
                    }
                }

                $data['contacts'] = serialize($contact);

                ContactGroup::create([
                    'user_id' => $user->id,
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'name' => $data['name'],
                    'contacts' => $data['contacts']
                ]);
            } else {
                ContactGroup::create([
                    'user_id' => $user->id,
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'name' => $data['name'],
                    'contacts' => $data['contacts']
                ]);
                // ContactGroup::create($data);
            }

            return redirect()->back()->with('message', 'Contacts created successfully');
        } catch (\Exception $e) {

            return redirect()->back()->with('error', $e->getMessage());
        }


        dd($rq->all());
    }

    public function deleteGroup($id) {
        $contact = ContactGroup::find($id);
        $contact->delete();
        return redirect()->back()->with("message", "Contact group deleted succcesfully!");
    }


    public function submitSMSForm(Request $rq)
    {
        $this->validate($rq, [
            'sender_name' => 'required',
            'contact_type' => 'required',
            'message' => 'required',
            'message_type' => 'required'
        ]);
        $user = Auth::user();
        if ($rq->contact_type == 'import_file') {
            $contacts =  Excel::toArray(new ContactImport($user->id, $rq->sender_name, $rq->message),  $rq->import_file)[0];
            $contact = [];

            foreach ($contacts as $subContact) {
                foreach ($subContact as $value) {
                    if (Str::length($value) == 10) {
                        $value = "0" . $value;
                        $contact[] = $value;
                    } elseif (Str::length($value) == 11 || Str::length($value) == 13 || Str::length($value) == 14) {
                        $contact[] = $value;
                    } else {
                        $value = null;
                    }
                }
            }
            $formatted_contacts = Str::replace(["[", "]", "", '"', ' '], '', $contact);
            // dd($rq->all(), $contacts, $contact, $formatted_contacts);
        } elseif ($rq->contact_type == 'select_group') {
            $contacts = ContactGroup::find($rq->selected_group)->contacts;
            $contact_array = [];
            $unser_contacts = unserialize($contacts);
            $formatted_contacts = implode(',', $unser_contacts);

          
            // dd($rq->all(), $formatted_contacts);
        } else {
            $contacts = $rq->manual_contact;
            $formatted_contacts = Str::replace(["[", "]", "", '"', ' '], '', $contacts);
            // dd($rq->all(), $contacts, $formatted_contacts);
        }
        $token = $this->getAuth();
        $the_work = $this->sendSMS($token,$rq->sender_name, $formatted_contacts,$rq->message);
        dd($the_work);
        //check if you get a success response and create a transaction model to save the transaction details.
    }
 
    public function getAuth()
    {

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://smsurway.com.ng/api/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'email=' . 'fasanyafemi@gmail.com' . '&password=' . '3PWrDX2UwvJdxDX', // Corrected concatenation
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;
        dd($response);
        return $response;
    }

    public function sendSMS($token,$sender_name,$contacts,$msg)
    {
        $url = 'https:// smsurway.com.ng/api/send/';
        $ch = curl_init(); //initialize curl handle
        curl_setopt($ch, CURLOPT_URL, $url); //set the url
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(["token" => $token, "from" => $sender_name, "to" => $contacts, "msg" => $msg])); //set the POST variables
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //return as a variable
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xwww-form-urlencoded'));
        curl_setopt($ch, CURLOPT_POST, 1); //set POST method
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}

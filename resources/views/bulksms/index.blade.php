@extends('bulksms.master')
@section('header')
@endsection

@section('content')
<div class="container-contact1">
  <div class="contact1-pic js-tilt" data-tilt>
    <img src="bulkasset/images/img-01.png" alt="IMG">
  </div>

  <form method='post' action='{{ route("submitSMSForm") }}' class="myForm" enctype="multipart/form-data">@csrf
    <span class="contact1-form-title">
      Abovemart Bulk SMS
    </span>

    <div class="wrap-input1 validate-input" data-validate="Sender Name is required">
      <input name='sender_name' id='sender_name' class="input1" type="text" name="name" placeholder="Sender's Name">
      <span class="shadow-input1"></span>
    </div>
    <label><b>Choose Contact Type</b></label>
    <div class="wrap-input1 validate-input">

      <input type="radio" name="contact_type" id="manual_input" value="manual_input" checked>
      <label for="contact_type1"><b>
          Manual Input</b>
      </label>
      <input type="radio" name="contact_type" id="import_csv" value="import_file">
      <label for="contact_type2"><b>
          Import from file(csv)</b>
      </label>
      <input type="radio" name="contact_type" id="select_group" value="select_group">
      <label for="contact_type2"><b>
          Select From Group</b>
      </label>


      <span class="shadow-input1"></span>
    </div>
    <input type='hidden' id='schedule_date' name='schedule_date' />
    <input type='hidden' id='schedule_time' name='schedule_time' />



    <div style='display:none' id='import_field' class="wrap-input1 validate-input" data-validate="Message is required">


      <div class="input-group mb-3">
        <input accept=".xls, .xlsx, .csv" type="file" class="form-control input1" name='import_file'>

      </div>
    </div>
    <div style='display:none' id='select_group_field' class="wrap-input1 validate-input"
      data-validate="Message is required">


      <div class="input-group mb-3">
        <select class="form-control" name='selected_group'>
          <option value=''>--Select From Group--</option>
          @foreach($contacts as $contact)
          <option value='{{ $contact->id }}'>{{ $contact->name }}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div id='manual_input_field' class="wrap-input1 validate-input" data-validate="Message is required">
      <span class='text-danger'><b>Please seperate phone numbers by commas</b></span>
      <textarea class="input1" id='contact_field' placeholder="Type Contact, seperate by comma"></textarea>
      <input type="hidden" name="manual_contact" id="appendedNumbersInput">

      <span class="shadow-input1"></span>
      <div id="output-container"></div>

    </div>

    <div class="wrap-input1 validate-input" data-validate="Message is required">
      <textarea required class="input1" name="message" id='sms' placeholder="Type SMS Message Here..."></textarea>
      <span id='max_char'><b class='text-danger'>NOTE : Maximum allowed characters <span
            id='character'>157</span>.</b></span>
    </div>


    <div class="wrap-input1 validate-input" data-validate="Sender Name is required">
      <select required class="form-control input1" type="text" name="message_type">
        <option value='Normal SMS'>Normal SMS</option>
        <option value='Flash SMS'>Flash SMS</option>
        <option value='Unicode SMS'>Unicode SMS</option>
      </select>
      <span class="shadow-input1"></span>
    </div>

    <div class="container-contact1-form-btn">
      <div class="btn-group btn-group-example mb-3" role="group">
        <button type="submit" class="btn btn-primary w-xs">Send Now</button>
        <button id='scheduleSend' type="button" class="btn btn-success w-xs">Schedule For Later</button>
      </div>
    </div>
  </form>
</div>

@endsection
@section('script')
<script>
  $(document).ready(function() {

$("#import_csv").click(function() {
  $("#import_field").show()
  $("#manual_input_field").hide()
  $("#select_group_field").hide()
})
$("#manual_input").click(function() {
  $("#manual_input_field").show()
  $("#select_group_field").hide()
  $("#import_field").hide()
})
$("#select_group").click(function() {
  $("#manual_input_field").hide()
  $("#select_group_field").show()
  $("#import_field").hide()
})
$("#sms").on('input', function() {
  var sms_length = $("#sms").val().length
  if(sms_length < 157) {
      $("#character").text(157 - sms_length)
  console.log(sms_length)
  } else {
      $("#max_char").text('You have reached the maximum length')
      $("#sms").prop('disabled',true)
  }
 

})
$("#scheduleSend").click(function() {
  scheduleSend()
})
function scheduleSend() {


Swal.fire({
 title: 'Schedule Send For Later',
 html: "<input id='sweet_alert_date' class='form-control form-input' min='" + new Date().toISOString().split("T")[0] + "' type='date'/><br><input id='sweet_alert_time' class='form-control form-input' type='time' />",
 showCancelButton: true,
 confirmButtonText: "Send SMS Later",
 preConfirm: () => {
   // Get the selected date from the date picker
   const selectedDate = document.getElementById('sweet_alert_date').value;
   const selectedTime = document.getElementById('sweet_alert_time').value;
   console.log('Selected Date:', selectedDate, selectedTime);
   $("#schedule_date").val(selectedDate)
   $("#schedule_time").val(selectedTime)
 },
}).then((result) => {
              // If the user confirms, submit the form
              if (result.isConfirmed) {
                  $(".myForm").submit();
              }
          });;


}

})
</script>

@endsection
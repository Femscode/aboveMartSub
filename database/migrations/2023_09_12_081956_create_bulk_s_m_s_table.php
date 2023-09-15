<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulk_s_m_s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('sender_id');
            $table->string('receiver');
            $table->string('message');
            $table->integer('status')->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bulk_s_m_s');
    }
};

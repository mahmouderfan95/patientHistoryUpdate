<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->default('default.png');
            $table->string('clinicName');
            $table->string('Primary_Speciality');
            $table->string('degree');
            $table->string('medical_description');
            $table->integer('Medical_License_Number');
            $table->string('Clinic_License');
            $table->string('phoneNumber');
            $table->string('telephone');
            $table->string('Hotline');
            $table->string('country');
            $table->string('city');
            $table->string('area');
            $table->string('street');
            $table->string('zip_code');
            $table->string('email');
            $table->string('password');
            $table->string('role');
            $table->boolean('verify')->default(false);
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
        Schema::dropIfExists('clinics');
    }
}

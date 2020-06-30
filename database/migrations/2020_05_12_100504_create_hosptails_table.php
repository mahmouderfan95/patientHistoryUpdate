<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHosptailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosptails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->default('default.png');
            $table->string('hosptailName');
            $table->string('Primary_Speciality');
            $table->string('degree');
            $table->string('medical_description');
            $table->string('Medical_License_Number');
            $table->string('Hosptail_License');
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
            $table->boolean('is_active')->default(false);
            $table->boolean('hosptail_labs')->default(false);
            $table->boolean('hosptail_xray')->default(false);
            $table->boolean('hosptail_pharmacy')->default(false);
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
        Schema::dropIfExists('hosptails');
    }
}

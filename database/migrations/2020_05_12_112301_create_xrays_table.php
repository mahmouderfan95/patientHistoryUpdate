<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXraysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xrays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->default('default.png');
            $table->string('xrayName');
            $table->string('xray_License');
            $table->string('Medical_License_Number');
            // $table->string('Hosptail_License');
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
        Schema::dropIfExists('xrays');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->default('default.png');
            $table->string('labsName');
            $table->string('Medical_License_Number');
            $table->string('labs_License');
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
        Schema::dropIfExists('labs');
    }
}

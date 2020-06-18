<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->default('default.png');
            $table->string('pharmacyName');
            $table->string('Medical_License_Number');
            $table->string('pharmacy_License');
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
        Schema::dropIfExists('pharmacies');
    }
}

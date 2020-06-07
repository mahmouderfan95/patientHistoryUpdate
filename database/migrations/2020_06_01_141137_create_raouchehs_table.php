<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaouchehsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raouchehs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prescription')->nullable();
            $table->string('temperature')->nullable();
            $table->string('blood_pressure')->nullable();
            $table->string('diabetics')->nullable();
            $table->string('jaw_type')->nullable();
            $table->string('jaw_direction')->nullable();
            $table->string('teeth_type')->nullable();
            $table->string('eye_type')->nullable();
            $table->string('medication_name')->nullable();
            $table->string('times_day')->nullable();
            $table->string('time')->nullable();
            $table->bigInteger('patient_id')->unsigned();

            $table->foreign('patient_id')->references('id')->on('patiens')->onDelete('cascade');
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
        Schema::dropIfExists('raouchehs');
    }
}

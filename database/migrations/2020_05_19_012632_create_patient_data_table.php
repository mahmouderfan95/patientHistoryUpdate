<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('width');
            $table->integer('height');
            $table->string('blood');
            $table->string('agree_name')->nullable();
            $table->string('allergi_name')->nullable();
            $table->string('severity')->nullable();
            $table->string('reaction')->nullable();
            $table->string('surgery_name')->nullable();
            $table->text('surgery_date')->nullable();
            $table->string('medication_name')->nullable();
            $table->integer('colonscopy')->default(2);
            $table->date('colonscopy_data')->nullable();
            $table->integer('mammogram')->default(4);
            $table->date('mammogram_data')->nullable();
            $table->integer('prc')->default(6);
            $table->date('prc_data')->nullable();
            $table->string('alcohol_type')->nullable();
            $table->string('alcohol_severity')->nullable();
            $table->string('cigarettes')->nullable();
            $table->string('tobacco')->nullable();
            $table->string('drug')->nullable();
            $table->string('mother')->nullable();
            $table->string('other_mother')->nullable();
            $table->string('father')->nullable();
            $table->string('other_father')->nullable();
            $table->string('sister')->nullable();
            $table->string('other_sister')->nullable();
            $table->string('brother')->nullable();
            $table->string('other_brother')->nullable();
            $table->string('grnadmaM')->nullable();
            $table->string('other_grnadmaM')->nullable();
            $table->string('grandmaF')->nullable();
            $table->string('other_grandmaF')->nullable();
            $table->string('grnadpaM')->nullable();
            $table->string('other_grnadpaM')->nullable();
            $table->string('grnadpaF')->nullable();
            $table->string('other_grnadpaF')->nullable();
            $table->bigInteger('patient_id')->unsigned();
            // foreign key //
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
        Schema::dropIfExists('patient_data');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patiens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->default('default.png');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->date('BirthDate');
            $table->string('gender');
            $table->string('email');
            $table->string('phoneNumber');
            $table->string('password');
            $table->string('state');
            $table->string('country')->default('Egypt');
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
        Schema::dropIfExists('patiens');
    }
}

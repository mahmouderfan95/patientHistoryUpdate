<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class verify_patient extends Model
{
    protected $fillable = ['token','user_id'];

}

<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
    protected $fillable = ['email','token','accountType'];
}

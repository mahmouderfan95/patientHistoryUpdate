<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Lab extends Authenticatable implements MustVerifyEmail
{
    protected $fillable = [
        'image',
        'labsName',
        'Medical_License_Number',
        'labs_License',
        'phoneNumber',
        'telephone',
        'Hotline',
        'country',
        'city',
        'area',
        'street',
        'zip_code',
        'email',
        'password',
        'role'
        'verify',
    ];
}

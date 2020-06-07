<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hosptail extends Authenticatable implements MustVerifyEmail
{
    protected $fillable = [
    'image',
    'hosptailName',
    'Primary_Speciality',
    'degree',
    'medical_description',
    'Medical_License_Number',
    'Hosptail_License',
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
    'role'];
}

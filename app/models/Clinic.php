<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Clinic extends Authenticatable implements MustVerifyEmail
{
    protected $fillable = [
        'image',
        'clinicName',
        'Primary_Speciality',
        'degree',
        'medical_description',
        'Medical_License_Number',
        'Clinic_License',
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
        'role',
        'verify',
        'clinic_labs',
        'clinic_xray',
        'clinic_pharmacy'
    ];
    public function doctors(){
        return $this->hasMany('App\models\Doctor','clinic_id');   
    }
}

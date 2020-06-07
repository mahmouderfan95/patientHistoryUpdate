<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patien extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    protected $fillable = [
        'image',
        'firstName',
        'middleName',
        'lastName',
        'BirthDate',
        'gender',
        'email',
        'phoneNumber',
        'password',
        'state',
        'country',
        'role'];
        // hidden field //
        protected $hidden = ['password'];

        protected $casts = [
            'email_verified_at' => 'datetime',
        ];

        public function patinets_data(){
            return $this->hasOne('App\models\patientData','patient_id');
        }
        public function Raoucheh(){
            return $this->hasMany('App\models\Raoucheh','patient_id');
        }
        public function patientAnalzazes(){
            return $this->hasMany('App\models\patientAnalazes','patient_id');
        }
        public function patient_rays(){
            return $this->hasMany('App\models\patientRays','patient_id');
        }


}

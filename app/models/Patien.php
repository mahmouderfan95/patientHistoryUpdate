<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patien extends Authenticatable
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
        'role',
        'verify',
        'code',
        'is_active'];
        // hidden field //
        protected $hidden = ['password'];

        // protected $casts = [
        //     'email_verified_at' => 'datetime',
        // ];
        /* -------- relation ------*/
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
            return $this->hasMany('App\models\patient_rays','patient_id');
        }
        /* -------- relation ------*/


}

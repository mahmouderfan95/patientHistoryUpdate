<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\PatientResetPasswordNotification;


class Patien extends Authenticatable
{
    use Notifiable;
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PatientResetPasswordNotification($token));
    }


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
        'is_active',
        'provider',
        'provider_id',
        'remember_token',
        'online'];
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
        public function patient_analzes(){
            return $this->hasMany('App\models\patient_analzes','patient_id');
        }
        public function patient_rays(){
            return $this->hasMany('App\models\patient_rays','patient_id');
        }
        public function StorageAnalzes(){
            return $this->hasMany('App\models\StorgeAnalazes','patient_id');
        }
        public function StorageRays(){
            return $this->hasMany('App\models\StorgeRays','patient_id');
        }
        /* -------- relation ------*/

}

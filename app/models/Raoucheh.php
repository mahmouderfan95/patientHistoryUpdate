<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Raoucheh extends Model
{
    protected $fillable = ['prescription','temperature','blood_pressure','diabetics','jaw_type','jaw_direction','teeth_type','eye_type','medication_name','times_day','time','patient_id'];
    public function patient(){
        return $this->belongsTo('App\models\Patien','patient_id');
    }
}

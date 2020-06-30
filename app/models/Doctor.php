<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['image','name','phoneNumber','Primary_Speciality','degree','information','hosptail_id','clinic_id'];
    public function hosptail(){
        return $this->belongsTo('App\models\Hosptail','hosptail_id');   
    }
    public function clinic(){
        return $this->belongsTo('App\models\Clinic','clinic_id');   
    }
}

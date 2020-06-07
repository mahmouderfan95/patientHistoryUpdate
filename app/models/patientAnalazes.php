<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class patientAnalazes extends Model
{
    protected $table = 'patient_analzes';
    protected $fillable = ['name','description','patient_id'];
    // protected $timestamps = false;
    public function patient(){
        return $this->belongsTo('App\models\Patien','patient_id');
    }
}

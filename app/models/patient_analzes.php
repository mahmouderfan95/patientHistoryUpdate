<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class patient_analzes extends Model
{
    protected $fillable = ['name','description','patient_id'];

    public function patien(){
    	return $this->belongsTo('App\models\Patien','patient_id');
    }
}

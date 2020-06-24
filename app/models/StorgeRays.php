<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class StorgeRays extends Model
{
    protected $fillable = ['name','patient_id'];
    public function patient(){
        return $this->belongsTo('App\models\Patien','patient_id');
    }
}

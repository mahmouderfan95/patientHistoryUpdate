<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class patient_rays extends Model
{
    protected $table = 'patient_rays';
    protected $fillable = ['name','description','patient_id','created_at'];
    public function patient(){
        return $this->beglonsTo('App\models\patien','patient_id');
    }
}

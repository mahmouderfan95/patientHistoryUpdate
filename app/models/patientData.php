<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class patientData extends Model
{
    protected $fillable = [
        'width',
        'height',
        'blood',
        'agree_name',
        'allergi_name',
        'severity',
        'reaction',
        'surgery_name',
        'surgery_date',
        'medication_name',
        'colonscopy',
        'colonscopy_data',
        'mammogram',
        'mammogram_data',
        'prc',
        'prc_data',
        'alcohol_type',
        'alcohol_severity',
        'cigarettes',
        'tobacco',
        'drug',
        'mother',
        'other_mother',
        'father',
        'other_father',
        'sister',
        'other_sister',
        'brother',
        'other_brother',
        'grnadmaM',
        'other_grnadmaM',
        'grandmaF',
        'other_grandmaF',
        'grnadpaM',
        'other_grnadpaM',
        'grnadpaF',
        'other_grnadpaF',
        'patient_id'
    ];
    public function patient(){
        return $this->belongsTo("App\models\Patien","patient_id");
    }
}

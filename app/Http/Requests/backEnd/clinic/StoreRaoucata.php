<?php

namespace App\Http\Requests\backEnd\clinic;

use Illuminate\Foundation\Http\FormRequest;

class StoreRaoucata extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'prescription'  => '',
            'temperature'   => '',
            'blood_pressure'=> '',
            'diabetics'     => '',
            'jaw_type'      => '',
            'jaw_direction' => '',
            'teeth_type'    => '',
            'eye_type'      => '',
            'medication_name'=> '',
            'times_day'     => '',
            'time'          => '',
        ];
    }
}

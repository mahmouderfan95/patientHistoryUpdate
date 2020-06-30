<?php

namespace App\Http\Requests\backEnd\doctor;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctor extends FormRequest
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
            'image' => 'image',
            'name'  => 'required',
            'phoneNumber' => 'required|unique:doctors|regex:/^([0-9\s\-\+\(\)]*)$/',
            'Primary_Speciality'    => 'required',
            'degree'    => 'required',
            'information'   => 'required',
        ];
    }
}

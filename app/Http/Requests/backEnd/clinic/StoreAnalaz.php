<?php

namespace App\Http\Requests\BackEnd\clinic;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnalaz extends FormRequest
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
            'name'=> 'required|array',
            'description'=> 'required',
            'patient_id'    => ''
        ];
    }
}

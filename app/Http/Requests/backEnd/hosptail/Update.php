<?php

namespace App\Http\Requests\backEnd\hosptail;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
            'hosptailName' => '',
            'Primary_Speciality'=> '',
            'Medical_License_Number'  => '',
            // 'Hosptail_License' => '',
            'phoneNumber'   => 'Rule::unique("hosptails")->ignore($this->id)|regex:/^([0-9\s\-\+\(\)]*)$/',
            'telephone'     => '',
            // 'phoneNumber'   => 'required',
            'Hotline'    => '',
            'country'           => '',
            // 'city'          => 'required',
            // 'area'          =>'required',
            // 'street'             => 'required',
            'zip_code'              => '',
            'email'                 => 'email|Rule::unique("hosptails")->ignore($this->id)',
            // 'password'          => '',
            'old_password'      => ''
            // 'password_confirmation'=>'sometimes|required_with:password',
        ];
    }
}

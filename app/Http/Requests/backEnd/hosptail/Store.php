<?php

namespace App\Http\Requests\backEnd\hosptail;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'hosptailName' => 'required',
            'Primary_Speciality'=> 'required',
            'degree'            => 'required',
            'medical_description'=> 'required',
            'Medical_License_Number'  => 'required',
            'Hosptail_License' => 'required',
            'phoneNumber'   => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'telephone'     => 'required',
            // 'phoneNumber'   => 'required',
            'Hotline'    => 'required',
            'country'           => 'required',
            'city'          => 'required',
            'area'          =>'required',
            'street'             => 'required',
            'zip_code'              => 'required',
            'email'                 => 'required|email',
            'password'          => 'required|confirmed',
            'password_confirmation'=>'sometimes|required_with:password',
            'role'  => '',
        ];
    }
}

<?php

namespace App\Http\Requests\backEnd\xray;

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
            'image' => 'image|required',
            'xrayName' => 'required',
            'Medical_License_Number'  => 'required',
            'xray_License' => 'image|required',
            'phoneNumber'   => 'required',
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

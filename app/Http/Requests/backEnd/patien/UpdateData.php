<?php

namespace App\Http\Requests\BackEnd\patien;

use Illuminate\Foundation\Http\FormRequest;

class UpdateData extends FormRequest
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
            'firstName' => 'required',
            'middleName'=> 'required',
            'lastName'  => 'required',
            'BirthDate' => 'required',
            'gender'   => 'required',
            'email'     => 'required|email|Rule::unique("patiens")->ignore($this->id)',
            'phoneNumber'   => 'required|Rule::unique("patiens")->ignore($this->id)|regex:/^([0-9\s\-\+\(\)]*)$/',
            // 'NationalNumber'    => 'required',
            // 'country'           => 'required',
            // 'password'          => 'required|confirmed',
            // 'password_confirmation'=>'sometimes|required_with:password',
            'state'             => 'required',
            'role'              => '',
        ];
    }
}

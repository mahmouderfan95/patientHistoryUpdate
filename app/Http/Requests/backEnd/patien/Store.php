<?php

namespace App\Http\Requests\backEnd\patien;

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
            'firstName' => 'required',
            'middleName'=> '',
            'lastName'  => 'required',
            'BirthDate' => 'required',
            'gender'   => 'required',
            'email'     => 'required|email|unique:patiens',
            'phoneNumber'   => 'required|unique:patiens|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'          => 'required|confirmed',
            'password_confirmation'=>'required|sometimes|required_with:password',
            'state'             => 'required',
            'role'              => '',
            'is_active'         => '',
            'countryCode'       => 'required',
            'online'            => '',
        ];
    }
}

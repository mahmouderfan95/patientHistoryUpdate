<?php

namespace App\Http\Requests\backEnd;

use Illuminate\Foundation\Http\FormRequest;

class patient_confirm_password extends FormRequest
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
            'new_password' => 'required',
            // 'password_confirmation' => 'required|sometimes|required_with:new_password',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
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
            'user'=>'required|max:7',
            'password'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'user.required'=>'User không được để trống !!',
            'user.max'=>'User tối đa 7 ký tự !!',
            'password.required'=>'Password không được để trống !!',
        ];
    }
}

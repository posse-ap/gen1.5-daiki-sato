<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'last_name' => 'required',
            'first_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '必須項目です。',
            'first_name.required' => '必須項目です。',
        ];
    }

}
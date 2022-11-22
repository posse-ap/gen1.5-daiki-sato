<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'birthday' => 'required|date_format:Y-m-d',
            'last_name' => 'required|string|max:20',
            'first_name' => 'required|string|max:20',
            'nickname' => 'required|string|max:30',
            'course_type' => 'required|integer',
            'gender_id' => 'required|integer',
            'prefecture' => 'required|string',
            'is_experienced' => 'required|boolean',
            'parent_last_name' => 'nullable|string|max:20',
            'parent_first_name' => 'nullable|string|max:20',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class StoreVideoRequest extends FormRequest
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
            'name' => 'required|string|max:120',
            'file' => 'required|file|max:819200|mimes:mp4,qt,mov,x-ms-wmv,mpeg,x-msvideo' // 800MB
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'namesは必須です',
            'name.string' => 'ファイル名は文字列で指定してください',
            'name.max' => 'ファイル名は120文字以下で指定してください',
            'files.*.required' => 'ファイルがありません',
            'file.file' => 'ファイルを指定してください',
            'file.max' => '800MBを超えるファイルは送信できません',
            'file.mimes' => '対応していないファイル形式です'
        ];
    }

    /**
     * エラー時のレスポンスを定義
     */
    protected function failedValidation($validator)
    {
        $res = response()->json([
            'status' => Response::HTTP_UNPROCESSABLE_ENTITY,
            'errors' => $validator->errors(),
        ], Response::HTTP_UNPROCESSABLE_ENTITY);
        throw new HttpResponseException($res);
    }
}

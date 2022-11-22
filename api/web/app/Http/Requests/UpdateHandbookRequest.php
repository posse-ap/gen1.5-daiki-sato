<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class UpdateHandbookRequest extends FormRequest
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
            'demonstration.videos' => 'present|array',
            'demonstration.videos.*' => 'file|max:819200|mimes:mp4,qt,mov,x-ms-wmv,mpeg,x-msvideo', // 800MB
            'demonstration.images' => 'present|array',
            'demonstration.images.*' => 'file', // TODO 画像APIに合わせてサイズ上限と拡張子のルールを追加する
            'demonstration.comment' => 'present|nullable|string',
            'explanation.videos' => 'present|array',
            'explanation.videos.*' => 'file|max:819200|mimes:mp4,qt,mov,x-ms-wmv,mpeg,x-msvideo', // 800MB
            'explanation.images' => 'present|array',
            'explanation.images.*' => 'file', // TODO 画像APIに合わせてサイズ上限と拡張子のルールを追加する
            'explanation.comment' => 'present|nullable|string',
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

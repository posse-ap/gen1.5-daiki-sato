<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class StoreHandbookRequest extends FormRequest
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
        $last_year = Carbon::now()->subYear()->year;
        $next_year = Carbon::now()->addYear()->year;
        return [
            'year' => "required|integer|min:{$last_year}|max:{$next_year}",
            'month' => 'required|integer|min:1|max:12',
            'font_id' => 'required|integer|exists:fonts,id',
            'grade_id' => 'present|nullable|integer|exists:grades,id',
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

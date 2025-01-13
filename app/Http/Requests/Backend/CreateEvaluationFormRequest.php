<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\BaseRequest;
use App\Models\EvaluationForm;


class CreateEvaluationFormRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'required|string|max:255',
            'gender' => 'nullable|in:male,female',
            'phone' => 'required|string|max:10',
            'email' => 'nullable|email|max:255',
            'question' => 'required|string',
            'improvements' => 'nullable|string',
            'intraoral_image_1' => 'nullable|file|image|max:2048',
            'intraoral_image_2' => 'nullable|file|image|max:2048',
            'intraoral_image_3' => 'nullable|file|image|max:2048',
            'intraoral_image_4' => 'nullable|file|image|max:2048',
            'status' => 'required|in:' . implode(',', EvaluationForm::STATUS),
            'notes' => 'nullable|string',
        ];

        for ($i = 1; $i <= 4; $i++) {
            $rules["intraoral_image_{$i}"] = 'nullable|image|mimes:jpeg,png,jpg|max:10240';
        }

        return $rules;
    }

    /**
     * Custom error messages for validation.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '名稱是必填的。',
            'name.string' => '名稱必須是字串。',
            'phone.required' => '電話是必填的。',
            'phone.string' => '電話是必須是字串。',
            'question.required' => '問題是必填的。',
            'question.string' => '問題是必須是字串。',
            'status.required' => '上架狀態是必填的。',
            'status.in' => '選擇的狀態無效，請提供有效的值。',
            'intraoral_image_*.image' => '上傳的檔案必須是圖片。',
            'intraoral_image_*.mimes' => '圖片格式必須是 jpeg、png 或 jpg。',
            'intraoral_image_*.max' => '圖片大小不得超過 10MB。',
        ];
    }
}

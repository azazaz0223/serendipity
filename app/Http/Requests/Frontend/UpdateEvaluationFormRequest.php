<?php

namespace App\Http\Requests\Frontend;

use App\Http\Requests\BaseRequest;


class UpdateEvaluationFormRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [];

        foreach ($this->all() as $key => $value) {
            // 只驗證符合 "intraoral_image_{i}" 格式的字段
            if (preg_match('/^intraoral_image_\d+$/', $key)) {
                $rules[$key] = [
                    'nullable',
                    'string',
                    function ($attribute, $value, $fail) {
                        // 確保是 Base64 圖片格式
                        if (!preg_match('/^data:image\/(jpeg|png|jpg|gif|heic);base64,/', $value)) {
                            return $fail("{$attribute} 必須是有效的 Base64 圖片（jpeg, png, jpg, gif, heic）。");
                        }

                        // 檢查圖片大小（最大 10MB）
                        $base64Data = explode(',', $value)[1] ?? null;
                        if ($base64Data && strlen(base64_decode($base64Data)) > 10 * 1024 * 1024) {
                            return $fail("{$attribute} 的大小超過 10MB 限制。");
                        }
                    }
                ];
            }
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
            'intraoral_image_*.*' => '圖片格式錯誤或大小超過限制。',
        ];
    }
}

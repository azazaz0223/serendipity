<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\BaseRequest;


class UpdateShareExperienceRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'type' => 'required|in:short,long',
            'treatment_duration' => 'required|string|max:255',
            'experience' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'status' => 'required|boolean',
            'sort' => 'nullable|integer|min:0',
        ];
    }

    /**
     * Custom error messages for validation.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => '標題是必填的。',
            'title.max' => '標題不能超過 255 個字元。',
            'type.required' => '類型是必填的。',
            'type.in' => '類型必須是 short 或 long。',
            'treatment_duration.required' => '療程時間是必填的。',
            'treatment_duration.max' => '療程時間不能超過 255 個字元。',
            'experience.required' => '心得是必填的。',
            'status.required' => '上架狀態是必填的。',
            'status.boolean' => '上架狀態必須是布林值。',
            'sort.integer' => '排序必須是整數。',
            'sort.min' => '排序不能小於 0。',
            'avatar.required' => '圖片是必須的。',
            'avatar.image' => '圖片必須是有效的圖像文件。',
            'avatar.mimes' => '圖片格式必須是 jpeg、png、jpg 或 gif。',
            'avatar.max' => '圖片大小不能超過 10MB。',
        ];
    }
}

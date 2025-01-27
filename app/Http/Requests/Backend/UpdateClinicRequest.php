<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\BaseRequest;


class UpdateClinicRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|string",
            "county" => "required|string",
            "district" => "required|string",
            "address" => "required|string",
            "phone" => "required|string",
            'url' => 'required|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
            "line_id" => "required|string",
            "facebook" => "required|string",
            "google_map" => "required|string",
            'status' => 'required|integer|in:0,1',
            'sort' => 'nullable|integer|min:0',
            'business_hours' => 'required|array',
            'business_hours.0.day' => 'required|string',
            'business_hours.0.time' => 'required|string',
            'business_hours.*.day' => 'nullable|string',
            'business_hours.*.time' => 'nullable|string',
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
            'name.required' => '診所名稱是必填的。',
            'county.required' => '縣市是必填的。',
            'district.required' => '行政區是必填的。',
            'address.required' => '地址是必填的。',
            'phone.required' => '電話是必填的。',
            'url.required' => '連結是必填的。',
            'url.url' => '連結必須是有效的 URL。',
            'image.image' => '圖片必須是有效的圖像文件。',
            'image.mimes' => '圖片格式必須是 jpeg、png、jpg。',
            'image.max' => '圖片大小不能超過 10MB。',
            'line_id.required' => 'Line ID 是必填的。',
            'facebook.required' => 'Facebook 是必填的。',
            'google_map.required' => 'Google Map 是必填的。',
            'status.required' => '上下架狀態是必填的。',
            'status.in' => '上下架狀態必須是 (下架) 或 (上架)。',
            'sort.integer' => '排序必須是整數。',
            'sort.min' => '排序必須是非負整數。',
            'business_hours.required' => '營業時間是必填的。',
            'business_hours.0.day.required' => '第一筆營業時間的周幾是必填的。',
            'business_hours.0.time.required' => '第一筆營業時間的時間是必填的。',
        ];
    }
}

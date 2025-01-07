<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\BaseRequest;


class UpdateCarouselRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'link' => 'required|url',
            'status' => 'required|boolean',
            'sort' => 'nullable|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
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
            'name.required' => '名稱是必填的。',
            'name.string' => '名稱必須是字串。',
            'link.required' => '連結是必填的。',
            'link.url' => '連結必須是有效的 URL。',
            'status.required' => '上架狀態是必填的。',
            'status.boolean' => '上架狀態必須是布林值。',
            'sort.integer' => '排序必須是整數。',
            'sort.min' => '排序不能小於 0。',
        ];
    }
}

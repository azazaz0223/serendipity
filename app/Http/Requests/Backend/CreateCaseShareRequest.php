<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\BaseRequest;


class CreateCaseShareRequest extends BaseRequest
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
            'publisher' => 'required|string|max:255',
            'summary' => 'nullable|string|max:255',
            'sort' => 'nullable|integer|min:0',
            'status' => 'required|integer|min:0',
            'content' => 'required|string',
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
            'title.required' => '標題是必填項。',
            'title.max' => '標題不能超過 255 個字符。',
            'publisher.required' => '發布者名稱是必填項。',
            'publisher.max' => '發布者名稱不能超過 255 個字符。',
            'summary.max' => '摘要不能超過 255 個字符。',
            'sort.integer' => '排序必須是整數。',
            'sort.min' => '排序值不能小於 0。',
            'status.required' => '狀態是必填項。',
            'status.in' => '狀態必須是 up 或 down。',
            'content.required' => '內容是必填項。',
        ];
    }
}

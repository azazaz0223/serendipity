<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\BaseRequest;


class UpdateQuestionRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => "required|string",
            "answer" => "required|string",
            'status' => 'required|integer|in:0,1',
            'sort' => 'nullable|integer|min:0'
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
            'question_title.required' => '問題標題是必填的。',
            'status.required' => '上下架狀態是必填的。',
            'status.in' => '上下架狀態必須是 0 (下架) 或 1 (上架)。',
            'sort.integer' => '排序必須是整數。',
            'sort.min' => '排序必須是非負整數。',
        ];
    }
}

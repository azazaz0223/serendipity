<?php

namespace App\Http\Requests\Frontend;

use App\Http\Requests\BaseRequest;


class FindMoreCaseShareRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'page' => 'required|integer|min:1'
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
            'page.required' => '分頁參數是必需的。',
            'page.integer' => '分頁參數必須是整數。',
            'page.min' => '分頁參數最小值為 1。',
        ];
    }
}

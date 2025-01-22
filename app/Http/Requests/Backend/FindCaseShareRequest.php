<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\BaseRequest;
use App\Models\EvaluationForm;


class FindCaseShareRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'started_at' => 'nullable|date|before_or_equal:ended_at',
            'ended_at' => 'nullable|date|after_or_equal:started_at',
            'publisher' => 'nullable|string|max:255',
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
            'started_at.date' => '查詢開始日期必須是有效的日期格式。',
            'ended_at.date' => '查詢結束日期必須是有效的日期格式。',
            'started_at.before_or_equal' => '開始日期不能晚於結束日期。',
            'ended_at.after_or_equal' => '結束日期不能早於開始日期。',
            'status.in' => '狀態選項無效。',
            'email.email' => 'Email 格式不正確。',
            'phone.regex' => '手機號碼只能包含數字。',
            'question.in' => '請選擇有效的齒列問題選項。',
        ];
    }
}

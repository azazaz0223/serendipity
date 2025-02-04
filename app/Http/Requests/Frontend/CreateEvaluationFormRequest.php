<?php

namespace App\Http\Requests\Frontend;

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
            'phone' => 'required|string|max:10',
            'email' => 'required|email|max:255',
            'question' => 'required|string',
            'improvements' => 'nullable|string',
        ];

        return $rules;
    }
}

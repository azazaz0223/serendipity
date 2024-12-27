<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\BaseRequest;

class UpdateAboutRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "en_title" => "required|string",
            "zh_title" => "required|string",
            "content" => "required|string",
        ];
    }
}

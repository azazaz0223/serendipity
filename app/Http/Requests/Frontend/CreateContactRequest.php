<?php

namespace App\Http\Requests\Frontend;

use App\Http\Requests\BaseRequest;

class CreateContactRequest extends BaseRequest
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
            "email" => "required|string",
            "content" => "required|string",
        ];
    }
}

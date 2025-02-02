<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\BaseRequest;


class SaveVideoRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "video" => "required|file|mimes:mp4,mov|max:51200",
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
            'video.mimes' => '影片格式僅限 MP4 或 MOV。',
            'video.max' => '影片大小不得超過 50 MB。',
        ];
    }
}

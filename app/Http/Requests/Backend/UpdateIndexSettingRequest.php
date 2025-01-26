<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\BaseRequest;


class UpdateIndexSettingRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules['param'] = 'nullable|string';
        $rules['subtitle_suitable_plan'] = 'nullable|string|max:100';
        $rules['subtitle_four_steps'] = 'nullable|string|max:50';

        for ($i = 1; $i <= 4; $i++) {
            $rules["step_{$i}_phase"] = 'nullable|string|max:20';
            $rules["step_{$i}_description"] = 'nullable|string|max:20';
            $rules["step_{$i}_price"] = 'nullable|integer|min:0';
            $rules["step_{$i}_button"] = 'nullable|file|mimes:svg|max:10240';
        }

        $rules['subtitle_suitable_aligners'] = 'nullable|string|max:50';

        for ($i = 1; $i <= 3; $i++) {
            $rules["plan_{$i}_name"] = 'nullable|string|max:40';
            $rules["plan_{$i}_price"] = 'nullable|integer|min:0';
            $rules["plan_{$i}_severity"] = 'nullable|string|max:40';
            $rules["plan_{$i}_region"] = 'nullable|string|max:40';
            $rules["plan_{$i}_treatment"] = 'nullable|string|max:40';
            $rules["plan_{$i}_description"] = 'nullable|string|max:40';
        }

        $rules['subtitle_payment_methods'] = 'nullable|string|max:50';
        $rules['payment_full_amount'] = 'nullable|string|max:36';

        for ($i = 1; $i <= 3; $i++) {
            $rules["payment_{$i}_name"] = 'nullable|string|max:12';
            $rules["payment_{$i}_price"] = 'nullable|string|max:16';
            $rules["payment_{$i}_description"] = 'nullable|string|max:12';
        }

        return $rules;
    }
}

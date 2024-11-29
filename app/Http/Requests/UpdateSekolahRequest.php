<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSekolahRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $province_id = $this->province;

        return [
            'name' => 'required|string|max:60|unique:sekolahs,name,' . $this->sekolah->id,
            'level' => 'required|in:SD,SMP,SMA',
            'province' => 'required|exists:provinces,id',
            'regency' => [
                'required',
                'exists:regencies,id',
                function ($attribute, $value, $fail) use ($province_id) {
                    $isRelated = \App\Models\Regency::where('id', $value)
                        ->where('province_id', $province_id)
                        ->exists();
                    if (!$isRelated) {
                        $fail("The selected {$attribute} does not belong to the specified province.");
                    }
                },
            ],
        ];
    }
}

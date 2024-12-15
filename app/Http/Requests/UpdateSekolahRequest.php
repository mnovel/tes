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
            'level' => 'required|in:SMP,SMA',
        ];
    }
}

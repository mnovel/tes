<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBakatRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:30|unique:bakats,name',
            'short_description' => 'nullable|string|max:255',
            'full_description' => 'required|string|max:500',
            'recommendation' => 'required|string|max:500',
            'icon' => 'nullable|file|mimes:jpeg,png,jpg|max:2048'
        ];
    }
}

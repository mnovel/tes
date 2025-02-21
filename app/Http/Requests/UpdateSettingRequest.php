<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'title' => 'required|string|max:16',
            'description' => 'required|string|max:255',
            'keywords' => 'required|string|max:255',
            'author' => 'required|string|max:20',
            'icon' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'contact.email' => 'required|email|max:255',
            'contact.phone' => 'required|regex:/^(\+628)[1-9][0-9]{6,9}$/',
            'contact.address' => 'required|string|max:255',
            'seo.google_analytics' => 'nullable|string',
            'seo.bing_webmaster' => 'nullable|string',
        ];
    }
}

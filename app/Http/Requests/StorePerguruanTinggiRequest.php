<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePerguruanTinggiRequest extends FormRequest
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
            'name' => 'required|string|max:120|unique:perguruan_tinggis,name',
            'jurusan' => 'required',
            'jurusan.*' => 'required|exists:jurusans,id|distinct',
            'status' => 'required|in:Active,Inactive'
        ];
    }
}

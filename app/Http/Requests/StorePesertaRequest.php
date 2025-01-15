<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePesertaRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:pesertas,email',
            'sekolah' => 'required|exists:sekolahs,id',
            'kelas' => 'required|exists:kelas,id',
            'perguruan_tinggi' => 'nullable|exists:perguruan_tinggis,id',
            'jurusan' => 'nullable|exists:jurusans,id',
        ];
    }
}

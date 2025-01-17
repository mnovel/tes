<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UpdateJawabanRequest extends FormRequest
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
            'option' => [
                'required',
                'array',
                function ($attribute, $value, $fail) {
                    $questionType = DB::table('pertanyaans')
                        ->where('id', $this->pertanyaan->id)
                        ->value('type');

                    if ($questionType === 'Multiple' && count($value) !== 3) {
                        $fail("Opsi yang dipilih harus 3.");
                    }

                    if ($questionType === 'Single' && count($value) !== 1) {
                        $fail("Opsi yang dipilih harus 1.");
                    }
                },
                function ($attribute, $value, $fail) {
                    if (count($value) !== count(array_unique($value))) {
                        $fail("Opsi yang dipilih tidak boleh duplikat.");
                    }
                }
            ],
            'option.*' => [
                'required',
                Rule::exists('options', 'id')->where(function ($query) {
                    return $query->where('pertanyaan_id', $this->pertanyaan->id);
                }),
            ]
        ];
    }
}

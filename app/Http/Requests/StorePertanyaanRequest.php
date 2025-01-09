<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StorePertanyaanRequest extends FormRequest
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
            'versi' => 'required|exists:versi_pertanyaans,id',
            'type' => 'required|in:Single,Multiple',
            'question' => 'required|string|unique:pertanyaans,question',
            'options' => 'required|array|min:2',
            'options.*.answer' => [
                'required',
                'string',
                'distinct',
                function ($attribute, $value, $fail) {
                    if ($this->input('type') === 'Single' && !in_array(Str::lower($value), ['setuju', 'tidak setuju'])) {
                        $fail("$attribute hanya boleh berisi 'Setuju' atau 'Tidak Setuju' untuk pertanyaan Single.");
                    }
                }
            ],
            'options.*.bakat' => [
                'distinct',
                function ($attribute, $value, $fail) {
                    $type = $this->input('type');
                    $options = $this->input('options');

                    preg_match('/options\.(\d+)\.bakat/', $attribute, $matches);
                    $index = $matches[1] ?? null;
                    $answer = $options[$index]['answer'] ?? null;

                    if ($type === 'Multiple' && is_null($value)) {
                        $fail("$attribute wajib diisi bila tipe adalah Multiple.");
                    }

                    if ($type === 'Single' && strtolower($answer) === 'tidak setuju' && !is_null($value)) {
                        $fail("$attribute harus null jika tipe Single dan jawaban adalah 'Tidak Setuju'.");
                    }

                    if ($type === 'Single' && strtolower($answer) === 'setuju' && is_null($value)) {
                        $fail("$attribute harus diisi jika tipe Single dan jawaban adalah 'Setuju'.");
                    }

                    if (!is_null($value) && !DB::table('bakats')->where('id', $value)->exists()) {
                        $fail("$attribute yang dipilih tidak valid.");
                    }
                }
            ]

        ];
    }
}

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
            'type' => 'required|in:SINGLE,MULTIPLE',
            'question' => 'required|string',
            'options' => ['required', 'array', function ($attribute, $value, $fail) {
                $type = $this->input('type');
                if ($type === 'SINGLE') {
                    $answers = array_column($value, 'answer');
                    $uniqueAnswers = array_unique($answers);

                    if (array_diff(['Setuju', 'Tidak Setuju'], $uniqueAnswers)) {
                        $fail("$attribute harus memiliki jawaban 'Setuju' dan 'Tidak Setuju'.");
                    }
                }
            }],
            'options.*' => 'required|array',
            'options.*.answer' => ['required', function ($attribute, $value, $fail) {
                $type = $this->input('type');
                if ($type === 'SINGLE') {
                    if (!in_array($value, ['Setuju', 'Tidak Setuju'])) {
                        $fail("$attribute harus 'Setuju' atau 'Tidak Setuju'.");
                    }
                }
            }],
            'options.*.bakat' => ['nullable', function ($attribute, $value, $fail) {
                $type = $this->input('type');
                $answer = $this->input(str_replace('.bakat', '.answer', $attribute));

                if ($type === 'SINGLE') {
                    if ($answer === 'Setuju') {
                        if (empty($value) || !DB::table('bakats')->where('id', $value)->exists()) {
                            $fail("$attribute tidak valid. Bakat harus ada dan ditemukan di tabel bakats.");
                        }
                    } elseif ($answer === 'Tidak Setuju') {
                        if ($value !== null) {
                            $fail("$attribute harus null ketika jawaban adalah 'Tidak Setuju'.");
                        }
                    }
                } elseif ($type === 'MULTIPLE') {
                    $options = $this->input('options');
                    $bakatIds = array_column($options, 'bakat');
                    $uniqueBakatIds = array_unique($bakatIds);

                    if (count($bakatIds) !== count($uniqueBakatIds)) {
                        $fail("$attribute harus memiliki bakat yang unik.");
                    }

                    if (empty($value) || !DB::table('bakats')->where('id', $value)->exists()) {
                        $fail("$attribute tidak valid. Bakat harus ada dan ditemukan di tabel bakats.");
                    }
                }
            }],
        ];
    }
}

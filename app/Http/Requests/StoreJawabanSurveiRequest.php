<?php

namespace App\Http\Requests;

use App\Models\Survei;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreJawabanSurveiRequest extends FormRequest
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
            'question' => [
                'required',
                'exists:surveis,id',
                Rule::unique('jawaban_surveis', 'question_id')->where(function ($query) {
                    return $query->where('sesi_id', $this->sesi->id);
                })
            ],
            'answer' => [
                'required',
                function ($attribute, $value, $fail) {
                    $survei = Survei::find($this->input('question'));
                    if ($survei && $survei->type === 'Scale') {
                        $validAnswers = ['Sangat Setuju', 'Setuju', 'Tidak Setuju', 'Sangat Tidak Setuju'];
                        if (!in_array($value, $validAnswers)) {
                            $fail('Jawaban yang dipilih tidak valid.');
                        }
                    }
                }
            ]
        ];
    }
}

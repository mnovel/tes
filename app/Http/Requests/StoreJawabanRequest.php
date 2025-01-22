<?php

namespace App\Http\Requests;

use App\Models\Sesi;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StoreJawabanRequest extends FormRequest
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
            'session' => [
                'required',
                'exists:sesis,id',
                function ($attribute, $value, $fail) {
                    $status = Sesi::find($value)->status;
                    if ($status != 'Active') {
                        $fail('Sesi anda telah berakhir');
                    }
                }
            ],
            'answer' => 'required|array',
            'answer.question' => [
                'required',
                'exists:pertanyaans,id',
                Rule::unique('jawabans', 'pertanyaan_id')->where(function ($query) {
                    return $query->where('sesi_id', request()->input('session'));
                }),
                function ($attribute, $value, $fail) {
                    $sesi = DB::table('sesis')
                        ->where('id', request()->input('session'))
                        ->first()->versi_id ?? null;

                    $pertanyaan = DB::table('pertanyaans')
                        ->where('id', $value)
                        ->first()->versi_id ?? null;

                    if ($sesi !== $pertanyaan) {
                        $fail("Pertanyaan tidak sesuai dengan sesi yang sedang berlangsung.");
                    }
                }
            ],
            'answer.option' => [
                'required',
                'array',
                function ($attribute, $value, $fail) {
                    $questionType = DB::table('pertanyaans')
                        ->where('id', request()->input('answer.question'))
                        ->value('type');

                    if ($questionType === 'Multiple' && count($value) !== 3) {
                        $fail("Opsi yang dipilih harus 3.");
                    }

                    if ($questionType === 'Single' && count($value) !== 1) {
                        $fail("Opsi yang dipilih harus 1.");
                    }
                },
            ],
            'answer.option.*' => [
                'required',
                'distinct',
                Rule::exists('options', 'id')->where(function ($query) {
                    return $query->where('pertanyaan_id', request()->input('answer.question'));
                }),
                Rule::unique('jawabans', 'option_id')->where(function ($query) {
                    return $query->where('sesi_id', request()->input('session'))
                        ->where('pertanyaan_id', request()->input('answer.question'));
                })
            ]
        ];
    }
}

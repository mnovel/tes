<?php

namespace App\Http\Controllers;

use App\Models\JawabanSurvei;
use App\Http\Requests\StoreJawabanSurveiRequest;
use App\Models\Sesi;
use App\Models\Survei;

class JawabanSurveiController extends Controller
{
    /**
     * Create a new JawabanSurveiController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['show', 'store']]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pertanyaan = Survei::with('jawabanSurvei')->where('status', 'Active')->get()->map(function ($survei) {
            return [
                'id' => $survei->id,
                'question' => $survei->question,
                'type' => $survei->type,
                'answers' => $survei->jawabanSurvei->map(function ($answer) {
                    return [
                        'sesi_id' => $answer->sesi_id,
                        'answer' => $answer->answer
                    ];
                })
            ];
        });

        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'jawaban survei']),
            'data' => $pertanyaan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sesi $sesi)
    {
        $pertanyaan = Survei::with(['jawabanSurvei' => function ($query) use ($sesi) {
            $query->where('sesi_id', $sesi->id);
        }])->get()->map(function ($survei) {
            $answer = $survei->jawabanSurvei->first();
            return [
                'id' => $survei->id,
                'question' => $survei->question,
                'type' => $survei->type,
                'answers' => $answer->answer ?? null
            ];
        });

        return response()->json([
            'status' => 'success',
            'data' => $pertanyaan,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJawabanSurveiRequest $request, Sesi $sesi)
    {
        $validated = $request->validated();

        if ($sesi->status != 'Survei') {
            return response()->json([
                'status' => 'error',
                'message' => __('completed_sesi')
            ]);
        }

        $jawabanSurvei = [];
        foreach ($validated as $data) {
            $jawabanSurvei[] = JawabanSurvei::create([
                'sesi_id' => $sesi->id,
                'question_id' => $data['question'],
                'answer' => $data['answer']
            ]);
        }

        $sesi->status = 'Completed';
        $sesi->save();

        $response = collect($jawabanSurvei)->map(function ($jawabanSurvei) {
            return [
                'sesi_id' => $jawabanSurvei->sesi_id,
                'question_id' => $jawabanSurvei->question_id,
                'answer' => $jawabanSurvei->answer
            ];
        });

        return response()->json([
            'status' => 'success',
            'message' => __('create_data', ['data' => 'jawaban survei']),
            'data' => $response
        ]);
    }
}

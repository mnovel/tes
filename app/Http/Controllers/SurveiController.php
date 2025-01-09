<?php

namespace App\Http\Controllers;

use App\Models\Survei;
use App\Http\Requests\StoreSurveiRequest;
use App\Http\Requests\UpdateSurveiRequest;

class SurveiController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $survei = Survei::all();
        return response()->json([
            'status' => 'success',
            'messsage' => __('display_data', ['data' => 'survei']),
            'data' => $survei
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSurveiRequest $request)
    {
        $validated = $request->validated();
        $survei = Survei::create($validated);
        return response()->json([
            'status' => 'success',
            'message' => __('create_data', ['data' => 'survei']),
            'data' => $survei
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Survei $survei)
    {
        return response()->json([
            'status' => 'success',
            'message' => __('detail_data', ['data' => 'survei']),
            'data' => $survei
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSurveiRequest $request, Survei $survei)
    {
        $validated = $request->validated();
        $survei->update($validated);
        return response()->json([
            'status' => 'success',
            'message' => __('update_data', ['data' => 'survei']),
            'data' => $survei
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survei $survei)
    {
        $survei->delete();
        return response()->json([
            'status' => 'success',
            'message' => __('delete_data', ['data' => 'survei']),
        ]);
    }
}

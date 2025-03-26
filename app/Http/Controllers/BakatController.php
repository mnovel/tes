<?php

namespace App\Http\Controllers;

use App\Models\Bakat;
use App\Http\Requests\StoreBakatRequest;
use App\Http\Requests\UpdateBakatRequest;
use Illuminate\Support\Facades\Storage;

class BakatController extends Controller
{

    /**
     * Create a new ProfesiController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bakat = Bakat::all()->map(function ($item) {
            if ($item->icon) {
                $item->icon = asset($item->icon);
            }
            return $item;
        });

        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'bakat']),
            'data' => $bakat,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBakatRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $path = $file->store('images/bakat', 'public');
            $validated['icon'] = $path;
        }

        $bakat = Bakat::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => __('create_data', ['data' => 'bakat']),
            'data' => $bakat,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bakat $bakat)
    {
        if ($bakat->icon) {
            $bakat->icon = asset($bakat->icon);
        }

        return response()->json(
            [
                'status' => 'success',
                'message' => __('detail_data', ['data' => 'bakat']),
                'data' => $bakat,
            ],
            200
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBakatRequest $request, Bakat $bakat)
    {
        $validated = $request->validated();

        if ($request->hasFile('icon')) {
            if ($bakat->icon && Storage::exists($bakat->icon)) {
                Storage::delete($bakat->icon);
            }

            $file = $request->file('icon');
            $path = $file->store('images/bakat', 'public');
            $validated['icon'] = $path;
        }

        $bakat->update($validated);
        return response()->json([
            'status' => 'success',
            'message' => __('update_data', ['data' => 'bakat']),
            'data' => $bakat,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bakat $bakat)
    {
        try {
            $bakat->delete();

            if ($bakat->icon && Storage::exists($bakat->icon)) {
                Storage::delete($bakat->icon);
            }

            return response()->json([
                'status' => 'success',
                'message' => __('delete_data', ['data' => 'bakat']),
            ], 200);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == 23000) {
                return response()->json([
                    'status' => 'error',
                    'message' => __('error_delete_relation', ['data' => 'bakat']),
                ], 400);
            }

            return response()->json([
                'status' => 'error',
                'message' => __('error_delete', ['data' => 'bakat']),
            ], 500);
        }
    }
}

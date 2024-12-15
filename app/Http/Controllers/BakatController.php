<?php

namespace App\Http\Controllers;

use App\Models\Bakat;
use App\Http\Requests\StoreBakatRequest;
use App\Http\Requests\UpdateBakatRequest;
use Illuminate\Support\Facades\Storage;

class BakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bakat = Bakat::all();

        dd($bakat->jurusan());

        return response()->json([
            'status' => 'success',
            'message' => __('Here is the list of all available talents!'),
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
            'message' => __('Hooray! A new talent has been successfully added to the list.'),
            'data' => $bakat,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bakat $bakat)
    {
        return response()->json([
            'status' => 'success',
            'message' => __('Here is the talent you were looking for!'),
            'data' => $bakat,
        ], 200);
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
            'message' => __('Great news! The talent details have been updated successfully.'),
            'data' => $bakat,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bakat $bakat)
    {
        if ($bakat->icon && Storage::exists($bakat->icon)) {
            Storage::delete($bakat->icon);
        }

        $bakat->delete();
        return response()->json([
            'status' => 'success',
            'message' => __('The talent has been removed successfully.'),
        ], 200);
    }
}

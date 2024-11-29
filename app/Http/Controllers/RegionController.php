<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;

class RegionController extends Controller
{

    public function provinces()
    {
        $provinces = Province::all();
        $response = [
            'status' => 'success',
            'data' => $provinces,
        ];
        return response()->json($response);
    }

    public function regencies(Request $request)
    {
        $validated = $request->validate([
            'province' => 'nullable|exists:provinces,id',
        ]);

        if (isset($validated['province'])) {
            $province = Province::with('regencies')->findOrFail($validated['province']);
            $regencies = $province->regencies;
        } else {
            $regencies = Regency::all();
        }

        return response()->json([
            'status' => 'success',
            'data' => $regencies,
        ]);
    }
}

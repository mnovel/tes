<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Http\Requests\StoreSekolahRequest;
use App\Http\Requests\UpdateSekolahRequest;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validated = $request->validate([
            'province' => 'nullable|exists:provinces,id',
            'regency' => 'nullable|exists:regencies,id',
            'name' => 'nullable|string|max:255',
        ]);

        $query = Sekolah::with(['province:id,name', 'regency:id,name'])
            ->orderBy('name');

        if (!empty($validated['province'])) {
            $query->where('province_id', $validated['province']);
        }

        if (!empty($validated['regency'])) {
            $query->where('regency_id', $validated['regency']);
        }

        if (!empty($validated['name'])) {
            $query->where('name', 'LIKE', '%' . $validated['name'] . '%');
        }

        $paginatedSchools = $query->paginate(15);

        $formattedSchools = $paginatedSchools->getCollection()->map(fn($school) => [
            'id' => $school->id,
            'name' => $school->name,
            'level' => $school->level,
            'province' => $school->province->name,
            'regency' => $school->regency->name,
        ]);

        $paginatedSchools->setCollection($formattedSchools);

        return response()->json([
            'status' => 'success',
            'message' => 'Here are the schools that match your search!',
            'data' => $paginatedSchools->items(),
            'meta' => [
                'current_page' => $paginatedSchools->currentPage(),
                'last_page' => $paginatedSchools->lastPage(),
                'per_page' => $paginatedSchools->perPage(),
                'total' => $paginatedSchools->total(),
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSekolahRequest $request)
    {
        $validated = $request->validated();

        $sekolah = Sekolah::create([
            'name' => $validated['name'],
            'level' => $validated['level'],
            'province_id' => $validated['province'],
            'regency_id' => $validated['regency'],
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Hooray! The school has been successfully added to the system.',
            'data' => $sekolah
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sekolah $sekolah)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Here is the detailed information about the school you requested!',
            'data' => [
                'id' => $sekolah->id,
                'name' => $sekolah->name,
                'level' => $sekolah->level,
                'province' => $sekolah->province->name,
                'regency' => $sekolah->regency->name,
            ]
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSekolahRequest $request, Sekolah $sekolah)
    {
        $validated = $request->validated();

        $sekolah->update([
            'name' => $validated['name'],
            'level' => $validated['level'],
            'province_id' => $validated['province'],
            'regency_id' => $validated['regency'],
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Great! The school information has been updated successfully.',
            'data' => $sekolah
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sekolah $sekolah)
    {
        $sekolah->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'The school has been successfully removed.',
        ], 200);
    }
}

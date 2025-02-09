<?php

namespace App\Http\Controllers;

use App\Models\Bakat;
use App\Models\Jurusan;
use App\Http\Requests\StoreJurusanRequest;
use App\Http\Requests\UpdateJurusanRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JurusanController extends Controller
{
    /**
     * Create a new JurusanController instance.
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
    public function index(Request $request)
    {
        $jurusan = Jurusan::with('bakat')->get()->map(function ($jurusan) {
            $data = [
                'id' => $jurusan->id,
                'name' => $jurusan->name,

            ];

            if (Auth::check()) {
                $data['bakat'] = $jurusan->bakat->map(function ($bakat) {
                    return [
                        'id' => $bakat->id,
                        'name' => $bakat->name,
                    ];
                });
            }

            return $data;
        });

        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'Jurusan']),
            'data' => $jurusan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJurusanRequest $request)
    {
        $validated = $request->validated();
        $jurusan = Jurusan::create([
            'name' => $validated['name'],
        ]);
        $jurusan->bakat()->attach($validated['bakat']);
        return response()->json([
            'status' => 'successs',
            'message' => __('create_data', ['data' => 'Jurusan']),
            'data' => [
                'id' => $jurusan->id,
                'name' => $jurusan->name,
                'bakat' => $jurusan->bakat->map(function ($bakat) {
                    return [
                        'id' => $bakat->id,
                        'name' => $bakat->name,
                    ];
                }),
            ]
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        $data = [
            'id' => $jurusan->id,
            'name' => $jurusan->name,

        ];

        if (Auth::check()) {
            $data['bakat'] = $jurusan->bakat->map(function ($bakat) {
                return [
                    'id' => $bakat->id,
                    'name' => $bakat->name,
                ];
            });
        }

        return response()->json([
            'status' => 'success',
            'message' => __('detail_data', ['data' => 'Jurusan']),
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJurusanRequest $request, Jurusan $jurusan)
    {
        $validated = $request->validated();
        $jurusan->name = $validated['name'];
        $jurusan->save();
        $jurusan->bakat()->sync($validated['bakat']);
        return response()->json([
            'status' => 'success',
            'message' => __('update_data', ['data' => 'Jurusan']),
            'data' => [
                'id' => $jurusan->id,
                'name' => $jurusan->name,
                'bakat' => $jurusan->bakat->map(function ($bakat) {
                    return [
                        'id' => $bakat->id,
                        'name' => $bakat->name,
                    ];
                }),
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();
        return response()->json([
            'status' => 'success',
            'message' => __('delete_data', ['data' => 'Jurusan']),
        ]);
    }
}

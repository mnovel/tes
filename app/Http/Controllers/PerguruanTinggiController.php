<?php

namespace App\Http\Controllers;

use App\Models\PerguruanTinggi;
use App\Http\Requests\StorePerguruanTinggiRequest;
use App\Http\Requests\UpdatePerguruanTinggiRequest;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerguruanTinggiController extends Controller
{

    /**
     * Create a new PerguruanTinggiController instance.
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
        $validated = $request->validate([
            'status' => 'nullable|in:Active,Inactive'
        ]);

        $query = PerguruanTinggi::with('jurusan');

        if (!empty($validated['status'])) {
            $query->where('status',  $validated['status']);
        }

        $perguruanTinggi = $query->get()->map(function ($perguruanTinggi) {
            return [
                'id' => $perguruanTinggi->id,
                'name' => $perguruanTinggi->name,
                'rank' => $perguruanTinggi->rank,
                'status' => $perguruanTinggi->status,
                'jurusan' =>  $perguruanTinggi->jurusan->map(function ($jurusan) {
                    return [
                        'id' => $jurusan->id,
                        'name' => $jurusan->name
                    ];
                })
            ];
        });

        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'perguruan tinggi']),
            'data' => $perguruanTinggi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePerguruanTinggiRequest $request)
    {
        $validated = $request->validated();
        $perguruanTinggi = PerguruanTinggi::create([
            'name' =>  $validated['name'],
            'rank' =>  $validated['rank'],
            'status' => $validated['status']
        ]);
        $perguruanTinggi->jurusan()->attach($validated['jurusan']);
        return response()->json([
            'status' => 'successs',
            'message' => __('create_data', ['data' => 'perguruan tinggi']),
            'data' => [
                'id' => $perguruanTinggi->id,
                'name' => $perguruanTinggi->name,
                'rank' => $perguruanTinggi->rank,
                'jurusan' => $perguruanTinggi->jurusan->map(function ($jurusan) {
                    return [
                        'id' => $jurusan->id,
                        'name' => $jurusan->name
                    ];
                }),
                'status' => $perguruanTinggi->status
            ]
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PerguruanTinggi $perguruanTinggi)
    {
        $data = [
            'id' => $perguruanTinggi->id,
            'name' => $perguruanTinggi->name,
            'rank' => $perguruanTinggi->rank,
            'status' => $perguruanTinggi->status,
            'jurusan' => $perguruanTinggi->jurusan->map(function ($jurusan) {
                return [
                    'id' => $jurusan->id,
                    'name' => $jurusan->name
                ];
            })
        ];

        return response()->json([
            'status' => 'success',
            'message' => __('detail_data', ['data' => 'perguruan tinggi']),
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePerguruanTinggiRequest $request, PerguruanTinggi $perguruanTinggi)
    {
        $validated = $request->validated();
        $perguruanTinggi->update([
            'name' =>  $validated['name'],
            'rank' =>  $validated['rank'],
            'status' => $validated['status']
        ]);
        $perguruanTinggi->jurusan()->sync($validated['jurusan']);
        return response()->json([
            'status' => 'successs',
            'message' => __('update_data', ['data' => 'perguruan tinggi']),
            'data' =>  [
                'id' => $perguruanTinggi->id,
                'name' => $perguruanTinggi->name,
                'rank' => $perguruanTinggi->rank,
                'jurusan' => $perguruanTinggi->jurusan->map(function ($jurusan) {
                    return [
                        'id' => $jurusan->id,
                        'name' => $jurusan->name
                    ];
                }),
                'status' => $perguruanTinggi->status
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PerguruanTinggi $perguruanTinggi)
    {
        $perguruanTinggi->delete();
        return response()->json([
            'status' => 'success',
            'message' =>  __('delete_data', ['data' => 'perguruan tinggi']),
        ]);
    }
}

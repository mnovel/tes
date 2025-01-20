<?php

namespace App\Http\Controllers;

use App\Models\Profesi;
use App\Http\Requests\StoreProfesiRequest;
use App\Http\Requests\UpdateProfesiRequest;
use Illuminate\Support\Facades\Auth;

class ProfesiController extends Controller
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
        $profesi = Profesi::with('bakat')->get()->map(function ($profesi) {
            $data =  [
                'id' => $profesi->id,
                'name' => $profesi->name,
            ];

            if (Auth::check()) {
                $data['bakat'] = $profesi->bakat->map(function ($bakat) {
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
            'message' => __('display_data', ['data' => 'profesi']),
            'data' => $profesi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesiRequest $request)
    {
        $validated = $request->validated();
        $profesi = Profesi::create([
            'name' => $validated['name'],
        ]);
        $profesi->bakat()->attach($validated['bakat']);
        return response()->json([
            'status' => 'successs',
            'message' => __('create_data', ['data' => 'profesi']),
            'data' => [
                'id' => $profesi->id,
                'name' => $profesi->name,
                'bakat' => $profesi->bakat->map(function ($bakat) {
                    return [
                        'id' => $bakat->id,
                        'name' => $bakat->name,
                    ];
                })
            ]
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesi $profesi)
    {

        $data = [
            'id' => $profesi->id,
            'name' => $profesi->name,
        ];

        if (Auth::check()) {
            $data['bakat'] = $profesi->bakat->map(function ($bakat) {
                return [
                    'id' => $bakat->id,
                    'name' => $bakat->name,
                ];
            });
        }

        return response()->json([
            'status' => 'success',
            'message' => __('detail_data', ['data' => 'profesi']),
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesiRequest $request, Profesi $profesi)
    {
        $validated = $request->validated();
        $profesi->name = $validated['name'];
        $profesi->save();
        $profesi->bakat()->sync($validated['bakat']);
        return response()->json([
            'status' => 'success',
            'message' => __('update_data', ['data' => 'profesi']),
            'data' => [
                'id' => $profesi->id,
                'name' => $profesi->name,
                'bakat' => $profesi->bakat->map(function ($bakat) {
                    return [
                        'id' => $bakat->id,
                        'name' => $bakat->name,
                    ];
                })
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesi $profesi)
    {
        $profesi->delete();
        return response()->json([
            'status' => 'success',
            'message' => __('delete_data', ['data' => 'profesi']),
        ]);
    }
}

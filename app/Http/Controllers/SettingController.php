<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
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
        $setting = Setting::select(['title', 'description', 'author', 'keywords', 'icon'])->first();
        return response()->json([
            'status' => 'success',
            'data' => $setting,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingRequest $request)
    {
        $validated = $request->validated();
        $setting = Setting::first();

        if ($request->hasFile('icon')) {
            $fileExtension = $request->file('icon')->getClientOriginalExtension();
            $iconFileName = 'icon.' . $fileExtension;
            $iconPath = $request->file('icon')->storeAs('images', $iconFileName, 'public');
            $validated['icon'] = $iconPath;
        }

        $setting->update($validated);
        return response()->json([
            'status' => 'success',
            'message' => 'The setting has been updated successfully.',
            'data' => $validated
        ], 200);
    }
}

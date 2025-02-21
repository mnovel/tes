<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\UpdateSettingRequest;

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
        $setting = Setting::first();
        if ($setting && $setting->icon) {
            $setting->icon = asset($setting->icon);
            $setting->favicon = asset($setting->favicon);
        }
        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'setting']),
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

        if ($request->hasFile('favicon')) {
            $fileExtension = $request->file('favicon')->getClientOriginalExtension();
            $iconFileName = 'favicon.' . $fileExtension;
            $iconPath = $request->file('icon')->storeAs('images', $iconFileName, 'public');
            $validated['favicon'] = $iconPath;
        }

        $setting->update($validated);
        return response()->json([
            'status' => 'success',
            'message' =>  __('update_data', ['data' => 'setting']),
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function create()
    {
        return view('admin.settings.edit');
    }
    public function store(Request $request)
    {
        foreach ($request->input('config') as $key => $value) {
            $setting = new Setting;
            $setting->setValue($key, $value);
        }
        return redirect()->route('settings')
            ->with('Settings Saved!');
    }
}

/*
$setting = Setting::where('key', 'website_name')->firstOrFail();
    $setting->value = $request->input('website_name');
    $setting->save();
    return redirect()->back()->with('success', __('Website name updated successfully.'));
*/

<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        return view('settings.index', compact('settings'));
    }

    public function edit()
    {
        $settings = Setting::first();
        return view('settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image',
            'number' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:500',
            'facebook' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'website_about' => 'nullable|string',
        ]);

        $settings = Setting::first();

        if (!$settings) {
            $settings = new Setting();
        }

        $logo = $settings->logo;

        if ($request->hasFile('logo')) {

            // DELETE OLD IMAGE
            if ($settings->logo) {

                // remove storage/ prefix
                $oldPath = str_replace('storage/', '', $settings->logo);

                if (Storage::disk('public')->exists($oldPath)) {
                    Storage::disk('public')->delete($oldPath);
                }
            }

            // STORE NEW IMAGE
            $path = $request->file('logo')->store('logo', 'public');

            // SAVE WITH storage/ PREFIX
            $logo = 'storage/' . $path;
        }

        $settings->number = $request->number;
        $settings->email = $request->email;
        $settings->address = $request->address;
        $settings->facebook = $request->facebook;
        $settings->instagram = $request->instagram;
        $settings->youtube = $request->youtube;
        $settings->linkedin = $request->linkedin;
        $settings->website_about = $request->website_about;
        $settings->logo = $logo;
        $settings->save();

        return redirect()->route('admin.settings')
            ->with('success', 'Settings updated successfully!');
    }
}

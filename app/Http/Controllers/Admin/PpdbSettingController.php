<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PpdbSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class PpdbSettingController extends Controller
{
    public function index()
    {
        $setting = PpdbSetting::first()->toArray();

        $setting['open'] = date('Y-m-d', strtotime($setting['open']));
        $setting['close'] = date('Y-m-d', strtotime($setting['close']));
        $setting['announcement'] = date('Y-m-d', strtotime($setting['announcement']));

        return Inertia::render('Admin/PPDB/Settings', [
            'setting' => $setting,
        ]);
    }

    public function store(Request $request)
    {
        $settingRequest = $request->all();

        $settingRequest['close'] .= ' 23:59';

        $ppdbSetting = PpdbSetting::first();

        $image = $request->image;

        if ($image && !(is_string($image))) {
            $path = $image->store('images');

            Storage::delete('images/'.$ppdbSetting->image);

            $settingRequest['image'] = str_replace('images/', '', $path);
        }

        $ppdbSetting->update($settingRequest);

        return back()->with([
            'message' => 'pengaturan berhasil disimpan',
        ]);
    }
}

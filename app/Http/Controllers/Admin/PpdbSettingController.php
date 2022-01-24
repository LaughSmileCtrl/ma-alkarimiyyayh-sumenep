<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PpdbSetting;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PpdbSettingController extends Controller
{
    public function index()
    {
        $setting = PpdbSetting::first()->toArray();

        $setting['open'] = date('Y-m-d\TH:i', strtotime($setting['open']));
        $setting['close'] = date('Y-m-d\TH:i', strtotime($setting['close']));
        $setting['announcement'] = date('Y-m-d\TH:i', strtotime($setting['announcement']));

        return Inertia::render('Admin/PPDB/Settings', [
            'setting' => $setting,
        ]);
    }

    public function store(Request $request)
    {
        PpdbSetting::first()
            ->update(
                $request->only([
                    'open',
                    'close',
                    'announcement',
                    'announcement_url'
                ]));

        return back()->with([
            'message' => 'pengaturan berhasil disimpan',
        ]);
    }
}

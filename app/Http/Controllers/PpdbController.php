<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePpdbRequest;
use App\Models\Ppdb;
use App\Models\PpdbSetting;
use DateTimeZone;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PpdbController extends Controller
{

    public function __construct()
    {
        $this->middleware('ppdb')->except('index');
    }

    public function index()
    {
        $ppdbSetting = PpdbSetting::first();

        return Inertia::render('Profile/PPDB', [
            'setting' => $ppdbSetting,
            'current_date' => now(new DateTimeZone('Asia/Jakarta')),
        ]);
    }

    public function create()
    {
        return Inertia::render('Profile/PPDBForm');
    }

    public function store(StorePpdbRequest $request)
    {
        Ppdb::create($request->validated());

        return back()->with([
            'message' => 'Anda berhasil melakukan pendaftaran',
        ]);
    }
}

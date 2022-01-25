<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\General;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{

    public function index()
    {
        $general = General::first();

        return Inertia::render('Admin/Dashboard', [
            'general' => $general,
        ]);
    }

    public function store(Request $request)
    {
        
        General::updateOrInsert(['id' => 1], $request->all());

        return back()->with([
            'message' => 'pengaturan berhasil disimpan',
        ]);

    }

}

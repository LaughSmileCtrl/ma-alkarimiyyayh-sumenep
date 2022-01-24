<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePpdbRequest;
use App\Http\Requests\UpdatePpdbRequest;
use App\Models\Ppdb;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PpdbController extends Controller
{

    public function index(Request $request)
    {
        $registrars = Ppdb::when($request->search, function($query, $search) {
                    return $query->where('name', 'LIKE', '%'.$search.'%')
                        ->orWhere('nisn', 'LIKE', '%'.$search.'%')
                        ->orWhere('nik', 'LIKE', '%'.$search.'%');
                })
                ->orderBy('created_at', 'desc')
                ->paginate(25);

        return Inertia::render('Admin/PPDB/Index', [
            'registrars' => $registrars
        ]);
    }



    public function show($id)
    {
        $registrar = Ppdb::findOrFail($id);

        return Inertia::render('Admin/PPDB/Detail', [
            'registrar' => $registrar,
        ]);
    }


    public function edit($id)
    {
        $registrar = Ppdb::findOrFail($id)->toArray();

        $registrar['date_of_birth'] = date('Y-m-d', strtotime($registrar['date_of_birth']));
        $registrar['father_date_of_birth'] = date('Y-m-d', strtotime($registrar['father_date_of_birth']));
        $registrar['mother_date_of_birth'] = date('Y-m-d', strtotime($registrar['mother_date_of_birth']));

        return Inertia::render('Admin/PPDB/Form', [
            'registrar' => $registrar,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePpdbRequest  $request
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function update(StorePpdbRequest $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $ppdb = Ppdb::findOrFail($id);

        $name = $ppdb->name;

        $ppdb->delete();

        return back()->with([
            'message' => $name.' berhasil dihapus',
        ]);
    }
}

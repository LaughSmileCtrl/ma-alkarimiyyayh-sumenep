<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateGraduateRequest;
use App\Http\Requests\Admin\UploadGraduateRequest;
use App\Models\Graduate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class GraduateController extends Controller
{

    public function index(Request $request)
    {
        $years = Graduate::select('year')->orderBy('year')->groupBy('year')->pluck('year');

        $graduates = Graduate::when($request->year, function($query, $year) {
                return $query->where('year', $year);
            })
            ->when($request->search, function($query, $search) {
                return $query->where('name', 'LIKE', '%'.$search.'%')
                    ->orWhere('nisn', 'LIKE', '%'.$search.'%');
            })
            ->orderBy('year')
            ->orderBy('name')
            ->paginate(25);

        return Inertia::render('Admin/ListGraduate', [
            'title' => 'Data Alumni',
            'fileFormat' => 'text/csv',
            'years' => $years,
            'graduates' => $graduates,
        ]);
    }



    public function store(UploadGraduateRequest $request)
    {
        $fileHandle = fopen($request->file('file'), 'r');
       
        $row = fgetcsv($fileHandle);

        $validator = Validator::make($row, [
                0 => function($attribute, $value, $fail){
                    if (strtolower($value) != 'tahun')
                        $fail('kolom pertama pada baris pertama harus tahun');
                    },
                1 => function($attribute, $value, $fail){
                    if (strtolower($value) != 'nisn')
                        $fail('kolom kedua pada baris kedua harus nisn');
                    },
                2 => function($attribute, $value, $fail){
                    if (strtolower($value) != 'nama')
                        $fail('kolom ketiga pada baris ketiga harus nama');
                    },
            ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        
        $row = fgetcsv($fileHandle);

        $n = 0;

        while (($row = fgetcsv($fileHandle, 0, ',')) !== FALSE) {
            $voter = Graduate::create([
                'year' => $row[0],
                'nisn' => $row[1],
                'name' => $row[2],
            ]);
            $n++;
        }

        return back()->with([
            'message' => 'file telah diproses. '.$n.' data telah disimpan',
        ]);
    }



    public function update(UpdateGraduateRequest $request, $id)
    {
        Graduate::findOrFail($id)
            ->update($request->validated());

        return back()->with([
            'message' => $request->name.' berhasil diubah',
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Graduate::findOrFail($id)->delete();

        return back()->with([
            'message' => 'berhasil dihapus',
        ]);
    }
}

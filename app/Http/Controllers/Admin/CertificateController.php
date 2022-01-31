<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFileRequest;
use App\Http\Requests\Admin\UpdateFileRequest;
use App\Models\File;
use App\Models\FileCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class CertificateController extends Controller
{
    public function index(Request $request)
    {
        $typeId = FileCategory::where('title', 'certificate')->first()->id;

        $years = File::select(DB::raw('year(created_at) as year'))
            ->where('type_id', $typeId)
            ->orderBy(DB::raw('year(created_at)'), 'desc')
            ->groupBy(DB::raw('year(created_at)'))
            ->pluck('year');;

        $files = File::where('type_id', $typeId)
            ->when($request->search, function($query, $search) {
                return $query->where('title', 'LIKE', '%'.$search.'%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(25);

        return Inertia::render('Admin/ListCertificate', [
            'title' => 'Dokumen Madrasah',
            'visibilityOption' => false,
            'years' => $years,
            'files' => $files,
        ]);

    }

    public function show($id)
    {
        $file = File::findOrFail($id);

        return Storage::download('file/certificate/'.$file->file, $file->title);
    }


    public function store(StoreFileRequest $request)
    {
        $path = $request->file->store('file/certificate/');

        $title = (stripos($request->title, $request->file->extension())) 
            ? $request->title 
            : $request->title.'.'.$request->file->extension();

        $filename = str_replace('file/certificate//', '', $path);

        $typeId = FileCategory::select('id')
            ->where('title', 'certificate')
            ->first()
            ->id;

        File::create([
            'title' => $title,
            'file' => $filename,
            'is_public' => 0,
            'type_id' => $typeId,
        ]);

        return back()->with([
            'message' => $request->title.' telah disimpan',
        ]);
    }


    public function update(UpdateFileRequest $request, $id)
    {
        $file = File::findOrFail($id);

        $file->title = $request->title;

        if ($request->file) {
            $path = $request->file->store('file/certificate/');

            $file->title = (stripos($request->title, $request->file->extension())) 
                ? $request->title 
                : $request->title.'.'.$request->file->extension();


            $filename = str_replace('file/certificate//', '', $path);

            Storage::delete('file/certificate/'.$file->file);

            $file->file = $filename;
        }
    
        $file->save();

        return back()->with([
            'message' => $request->title.' berhasil diubah',
        ]);
    }


    public function destroy($id)
    {
        $file = File::findOrFail($id);
        
        Storage::delete('file/certificate/'.$file->file);

        $title =  $file->title;
        
        $file->delete();

        return back()->with([
            'message' => $title.' berhasil dihapus',
        ]);
    }
}

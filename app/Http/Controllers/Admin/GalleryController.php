<?php

namespace App\Http\Controllers\Admin;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdatePhotoRequest;
use App\Http\Requests\Admin\StorePhotoRequest;
use App\Models\PhotoCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class GalleryController extends Controller
{

    public function index(Request $request)
    {
        
        $id = PhotoCategory::where('title', 'gallery')->first()->id;

        $years = Photo::select(DB::raw('year(created_at) as year'))
            ->where('type_id', $id)
            ->orderBy(DB::raw('year(created_at)'), 'desc')
            ->groupBy(DB::raw('year(created_at)'))
            ->pluck('year');;

        $photos = Photo::where('type_id', $id)
            ->when($request->search, function($query, $search) {
                return $query->where('title', 'LIKE', '%'.$search.'%')
                    ->orWhere('file', 'LIKE', '%'.$search.'%');
            })
            ->when($request->year, function($query, $year) {
                return $query->whereRaw('year(created_at) = '.$year);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(25);

        return Inertia::render('Admin/ListPhoto', [
            'title' => 'Album',
            'fileFormat' => 'image/*',
            'years' => $years,
            'photos' => $photos,
        ]);
    }


    public function store(StorePhotoRequest $request)
    {
        $path = $request->file->store('images/photo/');

        $filename = str_replace('images/photo//', '', $path);

        $typeId = PhotoCategory::select('id')
            ->where('title', 'gallery')
            ->first()
            ->id;

        Photo::create([
            'title' => $request->title,
            'file' => $filename,
            'type_id' => $typeId,
        ]);

        return back()->with([
            'message' => $request->title.' telah disimpan',
        ]);

    }


    public function update(UpdatePhotoRequest $request, $id)
    {
        $photo = Photo::findOrFail($id);

        $photo->update([
            'title' => $request->title,
        ]);

        if ($request->file) {
            $path = $request->file->store('images/photo/');

            $filename = str_replace('images/photo///', '', $path);

            if ($photo->file != 'default.png') {
                Storage::delete('images/photo/'.$photo->file);
            }

            $photo->file = $filename;
            $photo->save();
        }

        return back()->with([
            'message' => $request->title.' berhasil diubah',
        ]);
    }


    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);

        $photoName = $photo->file;

        if ($photoName != 'default.png') {
            Storage::delete('images/photo/'.$photoName);
        }

        $photo->delete();

        return back()->with([
            'message' => 'Foto Berhasil dihapus'
        ]);
    }
}

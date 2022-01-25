<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\FileCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class DocumentController extends Controller
{
    public function index()
    {
        $files = File::where('is_public', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return Inertia::render('Profile/Document', [
            'files' =>$files,
        ]);
    }

    public function show($id)
    {
        $file = File::findOrFail($id);

        if ($file->is_public == 0) {
            return back()->withErrors([
                'not found'
            ]);
        }

        $mailInId = FileCategory::select('id')
            ->where('title', 'mail-in')
            ->first()
            ->id;

        $mailOutId = FileCategory::select('id')
            ->where('title', 'mail-out')
            ->first()
            ->id;
        

        if ($file->type_id == $mailInId) {
            return Storage::download('file/mail-in/'.$file->file, $file->title);
        } else if ($file->type_id == $mailOutId) {
            return Storage::download('file/mail-out/'.$file->file, $file->title);
        }

        return back()->withErrors([
            'not found'
        ]);
    }
}

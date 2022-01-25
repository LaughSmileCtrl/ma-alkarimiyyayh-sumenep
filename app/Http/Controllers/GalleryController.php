<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\PhotoCategory;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GalleryController extends Controller
{
    public function index()
    {
        $galleryId = PhotoCategory::select('id')
            ->where('title', 'gallery')
            ->first()
            ->id;

        $gallery = Photo::where('type_id', $galleryId)
            ->orderBy('created_at', 'desc')
            ->paginate(25);

        return Inertia::render('Profile/Gallery', [
            'photos' =>$gallery
        ]);
    }
}

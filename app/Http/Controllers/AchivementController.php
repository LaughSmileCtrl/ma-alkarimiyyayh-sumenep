<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\PhotoCategory;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AchivementController extends Controller
{
    public function index()
    {
        $achivementId = PhotoCategory::select('id')
            ->where('title', 'achivement')
            ->first()
            ->id;

        $achivements = Photo::where('type_id', $achivementId)
            ->orderBy('created_at', 'desc')
            ->paginate(25);

        return Inertia::render('Profile/Achivement', [
            'achivements' => $achivements,
        ]);
    }
}

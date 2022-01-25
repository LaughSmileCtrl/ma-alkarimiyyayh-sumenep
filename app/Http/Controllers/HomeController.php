<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\General;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $studentCreationId = ArticleCategory::select('id')
            ->where('type', 'student-creation')
            ->first()
            ->id;

        $newsId = ArticleCategory::select('id')
            ->where('type', 'news')
            ->first()
            ->id;

        $news = Article::where('type_id', $newsId)
            ->orderBy('created_at', 'desc')
            ->first();

        $studentCreation = Article::where('type_id', $studentCreationId)
            ->orderBy('created_at', 'desc')
            ->first();
        
        $general = General::first();

        return Inertia::render('Profile/Home', [
            'general' => $general,
            'news' => $news,
            'student_creation' => $studentCreation,
        ]);
    }
}

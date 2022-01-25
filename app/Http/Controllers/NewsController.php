<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $id = ArticleCategory::select('id')->where('type', 'news')->first()->id;

        $articles = Article::select('id', 'title', 'author', 'created_at', 'image')
            ->where('type_id', $id)
            ->when($request->search, function($query, $search) {
                return $query->where('title', 'LIKE', '%'.$search.'%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(25);

        return Inertia::render('Profile/Article', [
            'title' => 'Berita',
            'articles' => $articles,
        ]);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return Inertia::render('Profile/ArticleDetail', [
            'article' => $article,
        ]);
    }
}

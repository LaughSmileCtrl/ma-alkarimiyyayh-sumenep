<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class NewsController extends Controller
{

    public function index(Request $request)
    {
        $id = ArticleCategory::select('id')->where('type', 'news')->first()->id;

        $news = Article::select('id', 'title', 'author', 'created_at')
            ->where('type_id', $id)
            ->when($request->search, function($query, $search) {
                return $query->where('title', 'LIKE', '%'.$search.'%');
            })
            ->paginate(25);

        return Inertia::render('Admin/Article/Index', [
            'title' => 'Berita',
            'create' => route('news.create'),
            'articles' => $news,
        ]);
    }


    public function create()
    {
        return Inertia::render('Admin/Article/Form', [
            'title' => 'Tambah Berita',
            'links' => [
                'back' => route('news.index'),
                'save' => route('news.store'),
            ]
        ]);
    }


    public function store(StoreArticleRequest $request)
    {
        $newsForm = $request->except('image');

        $newsForm['type_id'] = ArticleCategory::select('id')->where('type', 'news')->first()->id;

        $newsForm['author'] = 'admin';

        $article = Article::create($newsForm);

        if ($request->image) {
            $path = $request->image->store('images/article');
            $path = str_replace('images/article/', '', $path);

            $article->image = $path;
            $article->save();
        }

        return back()->with([
            'message' => 'Berita berhasil disimpan',
        ]);
    }


    public function show($id)
    {
        $article = Article::findOrFail($id);

        return Inertia::render('Profile/Article', [
            'article' => $article,
        ]);
    }


    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $article['_method'] = 'patch';

        return Inertia::render('Admin/Article/Form', [
            'title' => 'Ubah Berita',
            'article' => $article,
            'links' => [
                'back' => route('news.index'),
                'save' => route('news.update', $id),
            ]
        ]);
    }


    public function update(StoreArticleRequest $request, $id)
    {
        $newsForm = $request->except('image');

        $article = Article::findOrFail($id);

        $article->update($newsForm);

        if ($request->image) {
            $newImage = $request->image->store('images/article');
            $newImage = str_replace('images/article/', '', $newImage);

            Storage::delete('images/article/'.$article->image);

            $article->image = $newImage;
            $article->save();
        } else if ($article->image != 'default.png') {
            Storage::delete('images/article/'.$article->image);

            $article->image = 'default.png';
            $article->save();
        }

        return back()->with([
            'message' => 'Berita berhasil diubah',
        ]);

    }


    public function destroy($id)
    {
        Article::findOrFail($id)->delete();

        return back()->with([
            'message' => 'Berita berhasil dihapus',
        ]);
    }
}

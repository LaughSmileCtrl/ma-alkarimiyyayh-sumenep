<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreArticleRequest;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class StudentCreationController extends Controller
{

    public function index(Request $request)
    {
        $id = ArticleCategory::select('id')->where('type', 'student-creation')->first()->id;

        $studentCreation = Article::select('id', 'title', 'author', 'created_at')
            ->where('type_id', $id)
            ->when($request->search, function($query, $search) {
                return $query->where('title', 'LIKE', '%'.$search.'%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(25);

        return Inertia::render('Admin/Article/Index', [
            'title' => 'Karya Siswa',
            'create' => route('student-creations.create'),
            'articles' => $studentCreation,
        ]);
    }


    public function create()
    {
        return Inertia::render('Admin/Article/Form', [
            'title' => 'Tambah Karya Siswa',
            'links' => [
                'back' => route('student-creations.index'),
                'save' => route('student-creations.store'),
            ],
            'authorOption' => true,
        ]);
    }


    public function store(StoreArticleRequest $request)
    {
        $studentCreationForm = $request->except('image');

        $studentCreationForm['type_id'] = ArticleCategory::select('id')->where('type', 'student-creation')->first()->id;

        $article = Article::create($studentCreationForm);

        if ($request->image) {
            $path = $request->image->store('images/article');
            $path = str_replace('images/article/', '', $path);

            $article->image = $path;
            $article->save();
        }

        return back()->with([
            'message' => 'Karya Siswa berhasil disimpan',
        ]);
    }


    public function show($id)
    {
        $article = Article::find($id);
        return Inertia::render('Profile/Article', [
            'article' => $article,
        ]);
    }


    public function edit($id)
    {
        $article = Article::find($id);
        $article['_method'] = 'patch';

        return Inertia::render('Admin/Article/Form', [
            'title' => 'Ubah Karya Siswa',
            'article' => $article,
            'links' => [
                'back' => route('student-creations.index'),
                'save' => route('student-creations.update', $id),
            ],
            'authorOption' => true,
        ]);
    }


    public function update(StoreArticleRequest $request, $id)
    {
        $studentCreationForm = $request->except('image');

        $article = Article::find($id);

        $article->update($studentCreationForm);

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
            'message' => 'Karya Siswa berhasil diubah',
        ]);

    }


    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        $photoName = $article->image;

        if ($photoName != 'default.png') {
            Storage::delete('/images/article/'.$article->image);
        }
        
        $article->delete();

        return back()->with([
            'message' => 'Karya Siswa berhasil dihapus',
        ]);
    }
}

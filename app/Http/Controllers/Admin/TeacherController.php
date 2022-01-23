<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $teachers = Teacher::when($request->search, function($query, $search) {
            return $query->where('name', 'LIKE', '%'.$search.'%');
        }) ->orderBy('created_at', 'desc')
        ->paginate(25);

        return Inertia::render('Admin/ListTeacher', [
            'title' => 'Daftar Guru',
            'fileFormat' => 'image/*',
            'teachers' => $teachers,
        ]);
    }


    public function store(StoreTeacherRequest $request)
    {
        $path = $request->photo->store('images/teacher/');

        $filename = str_replace('images/teacher/', '', $path);

        Teacher::create([
            'name' => $request->name,
            'subject' => $request->subject,
            'photo' => $filename,
        ]);

        return back()->with([
            'message' => $request->name.' telah disimpan',
        ]);
    }

    public function update(StoreTeacherRequest $request, Teacher $teacher)
    {
        $teacher->name = $request->name;
        $teacher->subject = $request->subject;

        $photo = $request->photo;

        if ($photo) {
            $path = $photo->store('images/teacher/');

            $filename = str_replace('images/teacher/', '', $path);

            if ($teacher->file != 'default.png') {
                Storage::delete('images/teacher/'.$teacher->photo);
            }

            $teacher->photo = $filename;
            
        }

        $teacher->save();

        return back()->with([
            'message' => $request->title.' berhasil diubah',
        ]);
    }

 
    public function destroy(Teacher $teacher)
    {
        $name = $teacher->name;

        if ($teacher->file != 'default.png') {
            Storage::delete('images/teacher/'.$teacher->photo);
        }

        $teacher->delete();

        return back()->with([
            'message' => $name.'berhasil dihapus'
        ]);
    }
}

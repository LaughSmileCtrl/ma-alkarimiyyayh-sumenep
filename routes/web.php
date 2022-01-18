<?php

use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\StudentCreationController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Profile/Home');
})->name('home');

Route::get('/history', function () {
    return Inertia::render('Profile/History');
})->name('history');

Route::get('/visionmission', function () {
    return Inertia::render('Profile/VisionMission');
})->name('visionmission');

Route::get('/teachers', function () {
    return Inertia::render('Profile/Teachers');
})->name('teachers');

Route::get('/structural', function () {
    return Inertia::render('Profile/Structural');
})->name('structural');

Route::get('/stakeholder', function () {
    return Inertia::render('Profile/Stakeholder');
})->name('stakeholder');

Route::get('/contact', function () {
    return Inertia::render('Profile/Contact');
})->name('contact');

Route::get('/department', function () {
    return Inertia::render('Profile/Department');
})->name('department');

Route::get('/extracurricular', function () {
    return Inertia::render('Profile/Extracurricular');
})->name('extracurricular');

Route::get('/achivement', function () {
    return Inertia::render('Profile/Achivement');
})->name('achivement');

Route::get('/graduate', function () {
    return Inertia::render('Profile/Graduate');
})->name('graduate');

Route::get('/our-news', function () {
    return Inertia::render('Profile/News');
})->name('news');

Route::get('/news-detail', function () {
    return Inertia::render('Profile/Artikel');
})->name('news-detail');

Route::get('/ppdb', function () {
    return Inertia::render('Profile/PPDB');
})->name('ppdb');

Route::get('/ppdb-form', function () {
    return Inertia::render('Profile/PPDBForm');
})->name('ppdb-form');

Route::get('/gallery', function () {
    return Inertia::render('Profile/Gallery');
})->name('gallery');

Route::get('/document', function () {
    return Inertia::render('Profile/Document');
})->name('document');


/**
 * Admin Section
 * 
 */

Route::get('/dashboard', function () {
    return Inertia::render('Admin/Dashboard');
})->name('dashboard');

Route::get('/achivement', function () {
    return Inertia::render('Admin/ListPhoto', [
        'title' => 'Prestasi',
        'fileFormat' => 'image/*',
        'visibilityOption' => false,
    ]);
})->name('achivement');

Route::get('/gallery/index', function () {
    return Inertia::render('Admin/ListPhoto', [
        'title' => 'Album',
        'visibilityOption' => false,
        'fileFormat' => 'image/*'
    ]);
})->name('gallery.index');

Route::get('/graduate', function () {
    return Inertia::render('Admin/ListGraduate', [
        'title' => 'Data Alumni',
        'fileFormat' => 'text/csv',
        'nameOption' => false,
        'visibilityOption' => false,
    ]);
})->name('graduate');

Route::get('/in-mail', function () {
    return Inertia::render('Admin/ListFile', [
        'title' => 'Surat Masuk'
    ]);
})->name('in-mail');

Route::get('/out-mail', function () {
    return Inertia::render('Admin/ListFile', [
        'title' => 'Surat Keluar'
    ]);
})->name('out-mail');

Route::get('/certificate', function () {
    return Inertia::render('Admin/ListCertificate', [
        'title' => 'Ijazah',
        'visibilityOption' => false,
        'nameOption' => false,
    ]);
})->name('certificate');







Route::get('/ppdb/index', function () {
    return Inertia::render('Admin/PPDB/Index');
})->name('ppdb.index');

Route::get('/ppdb/show', function () {
    return Inertia::render('Admin/PPDB/Detail');
})->name('ppdb.show');

Route::get('/ppdb/edit', function () {
    return Inertia::render('Admin/PPDB/Form');
})->name('ppdb.edit');

Route::get('/ppdb/settings', function () {
    return Inertia::render('Admin/PPDB/Settings');
})->name('ppdb.settings');



Route::resource('news', NewsController::class);

Route::resource('student-creation', StudentCreationController::class);



// Route::get('/dashboard', function () {
//     return Inertia::render('Profile/Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');






require __DIR__.'/auth.php';

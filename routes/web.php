<?php

use App\Http\Controllers\Admin\AchivementController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GraduateController;
use App\Http\Controllers\Admin\MailInController;
use App\Http\Controllers\Admin\MailOutController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\StudentCreationController;
use App\Http\Controllers\Admin\TeacherController;
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

Route::resource('student-creations', StudentCreationController::class);

Route::resource('graduates', GraduateController::class)
    ->except(['create', 'show', 'edit']);

Route::resource('gallery', GalleryController::class)
    ->except(['create', 'show', 'edit']);

Route::resource('achivements', AchivementController::class)
    ->except(['create', 'show', 'edit']);

Route::resource('mail-in', MailInController::class)
    ->except(['create', 'edit']);

Route::resource('mail-out', MailOutController::class)
    ->except(['create', 'edit']);

Route::resource('certificates', CertificateController::class)
    ->except(['create', 'edit']);

Route::resource('teachers', TeacherController::class)
    ->except(['create', 'show', 'edit']);

// Route::get('/dashboard', function () {
//     return Inertia::render('Profile/Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');






require __DIR__.'/auth.php';

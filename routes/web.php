<?php

use App\Http\Controllers\AchivementController as GuestAchivementController;
use App\Http\Controllers\Admin\AchivementController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GraduateController;
use App\Http\Controllers\Admin\MailInController;
use App\Http\Controllers\Admin\MailOutController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PpdbController;
use App\Http\Controllers\Admin\PpdbSettingController;
use App\Http\Controllers\Admin\StudentCreationController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GalleryController as GuestGalleryController;
use App\Http\Controllers\GraduateController as GuestGraduateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController as GuestNewsController;
use App\Http\Controllers\PpdbController as GuestPpdbController;
use App\Http\Controllers\StudentCreationController as GuestStudentCreationController;
use App\Http\Controllers\TeacherController as GuestTeacherController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/history', function () {
    return Inertia::render('Profile/History');
})->name('history');

Route::get('/visionmission', function () {
    return Inertia::render('Profile/VisionMission');
})->name('visionmission');

Route::resource('teacher', GuestTeacherController::class)
    ->only('index');

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

Route::resource('achivement', GuestAchivementController::class)
    ->only('index');

Route::resource('graduate', GuestGraduateController::class)
    ->only('index');

Route::resource('news', GuestNewsController::class)
    ->only(['index', 'show']);

Route::resource('student-creations', GuestStudentCreationController::class)
    ->only(['index', 'show']);

Route::resource('ppdb', GuestPpdbController::class)
    ->only(['index', 'create', 'store']);

Route::resource('photo', GuestGalleryController::class)
    ->only('index');

Route::resource('document', DocumentController::class)
    ->only(['index', 'show']);

/**
 * Admin Section
 * 
 */

Route::resource('dashboard', DashboardController::class)
    ->only(['index', 'store']);

Route::resource('teachers', TeacherController::class)
    ->except(['create', 'show', 'edit']);

Route::resource('news-admin', NewsController::class);

Route::resource('student-creations-admin', StudentCreationController::class);

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

Route::get('ppdb-admin/{id}/pdf', [PpdbController::class, 'toPdf'])
    ->name('ppdb-admin.topdf');

Route::delete('ppdb-admin/destroy-all', [PpdbController::class, 'deleteAll'])
    ->name('ppdb-admin.destroy-all');

Route::get('ppdb-admin/export-all', [PpdbController::class, 'exportAll'])
    ->name('ppdb-admin.export-all');
    
Route::resource('ppdb-admin', PpdbController::class);

Route::resource('ppdb-setting', PpdbSettingController::class)
    ->only(['index', 'store']);


require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Arr;
use App\Http\Controllers\MultiUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::get('/', [MultiUser::class, 'index']);
Route::post  ('/', [MultiUser::class, 'login']);



// ---------------PAGE------------------- //

// DASHBOARD
Route::get('/dashboard', function () {
    return view('page.dashboard', [
        'title' => 'Dashboard'
    ]);
});


// DATASISWA
Route::resource('student', StudentController::class);
Route::resource('teacher', TeacherController::class);



// KATEGORI PELANGGARAN
Route::get('/kategoripelanggaran', function () {
    return view('page.kategoripelanggaran',
    [
        'title' => 'Kategori Pelanggaran'
    ]);
});

// LAPORAN
Route::get('/laporan', function () {
    return view('page.laporan',
    [
        'title' => 'Laporan'
    ]);
});

// LIST PELANGGARAN
Route::get('/listpelanggaran', function () {
    return view('listpelanggaran.listpelanggaran',
    [
        'title' => 'List Pelanggaran'
    ]);
});

// PROFILE
Route::get('/profile', function () {

    return view('page.profile', [

        'title' => 'Profile'
    ]);
});


// UPDATE
Route::get('/update', function () {

    return view('page.upadate', [

        'title' => 'Update Profil'
    ]);
});

// -------------MASUK-------------- //

// LOGIN
Route::get('/login', function () {
    return view('masuk.login');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Resume\PDFController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Resume\ResumeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layout.main');
});


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function() {
    Route::get('/create-resume', function(){
        return view('pages.createResume');
    })->name('resume.create');
    Route::post('/create-resume', [ResumeController::class, 'store']);
    Route::get('/view-resume', [ResumeController::class, 'index'])->name('resume.view');
    Route::get('resumes/{resume}/pdf', [PDFController::class, 'generatePDF'])->name('resumes.pdf');

});
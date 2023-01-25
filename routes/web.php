<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[StudentController::class,'index']);
Route::get('/addStudent',[StudentController::class,'create'])->name('student.create');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::get('/student/destroy/{id}',[StudentController::class,'destroy'])->name('student.destroy');
Route::get('/student/show/{id}',[StudentController::class,'show'])->name('student.show');
Route::get('/student/edit/{student}',[StudentController::class,'edit'])->name('student.edit');
Route::put('/student/update/{student}',[StudentController::class,'update'])->name('student.update');
Route::get("/student/search", [StudentController::class, "search"])->name('student.search');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

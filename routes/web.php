<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentAuthController;
use App\Models\Instructor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::post('/instructors', [InstructorController::class, 'store'])->name('instructors.store');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/dashboard', [StudentController::class, 'dashboard'])->name('students.dashboard');
Route::get('/students/register', [StudentController::class, 'register'])->name('students.register');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::patch('/students/{student}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');


Route::get('/instructors', [InstructorController::class, 'index'])->name('instructors.index');
Route::get('/instructors/dashboard', [InstructorController::class, 'dashboard'])->name('instructors.dashboard');
Route::get('/instructors/register', [InstructorController::class, 'register'])->name('instructors.register');
Route::get('/instructors/{instructor}/edit', [InstructorController::class, 'edit'])->name('instructors.edit');
Route::patch('/instructors/{instructor}', [InstructorController::class, 'update'])->name('instructors.update');
Route::delete('/instructors/{instructor}', [InstructorController::class, 'destroy'])->name('instructors.destroy');
Route::get('/activity', function () {
    return view('activity');
});
require __DIR__.'/auth.php';

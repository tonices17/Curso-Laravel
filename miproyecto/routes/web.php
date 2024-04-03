<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');

Route::resource('/users', UserController::class);
// El Route::resource sería lo mismo que hacer todas las peticiones una a una
// Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
Route::get('/notes/{id}', [NoteController::class, 'show'])->name('notes.show');
Route::post('/notes/store', [NoteController::class, 'store'])->name('notes.store');
Route::get('notes/edit/{id}', [NoteController::class, 'edit'])->name('notes.edit');
Route::put('notes/update/{id}', [NoteController::class, 'update'])->name('notes.update');
Route::delete('notes/delete/{id}', [NoteController::class, 'destroy'])->name('notes.delete');

Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::get('/authors/{id}', [AuthorController::class, 'show'])->name('authors.show');
Route::post('/authors/store', [AuthorController::class, 'store'])->name('authors.store');
Route::get('authors/edit/{id}', [AuthorController::class, 'edit'])->name('authors.edit');
Route::put('authors/update/{id}', [AuthorController::class, 'update'])->name('authors.update');
Route::delete('authors/delete/{id}', [AuthorController::class, 'destroy'])->name('authors.delete');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

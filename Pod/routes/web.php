<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Blog Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blogs',[BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs/store', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/blogs/show{id}',[BlogController::class, 'show'])->name('blogs.show');
Route::get('/blogs/edit{id}',[BlogController::class, 'edit'])->name('blogs.edit');

//Comments Routes

Route::get('/comments',[CommentController::class, 'index'])->name('comments.index');
Route::get('/comments/{blog_id}', [CommentController::class, 'create'])->name('comments.create');
Route::post('/comments/{blog_id}', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/show{id}',[CommentController::class, 'show'])->name('comments.show');
Route::get('/comments/edit{id}',[CommentController::class, 'edit'])->name('comments.edit');


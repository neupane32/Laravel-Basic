<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\URL;

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

// Force HTTPS scheme (if necessary)
URL::forceScheme('https');

// Define the routes for the CRUD operations on posts

// Display all posts (Home page)
Route::get('/', [PostController::class, 'index'])->name('posts.index');

// Show the form for creating a new post
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Store a new post in the database
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Display a specific post
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Show the form for editing a specific post
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Update a specific post in the database
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// Delete a specific post from the database
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentaryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');

//Categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

//Posts
Route::get('/posts/new', [PostController::class, 'getNew'])->name('posts.new');
Route::get('/posts/popular', [PostController::class, 'getPopular'])->name('posts.popular');
Route::get('/posts/{id}', [PostController::class, 'postById'])->name('posts.id');
Route::get('/posts/category/{category}', [PostController::class, 'postByCategory'])->name('posts.category');
Route::get('/posts/create/page', [PostController::class, 'goToCreatePage'])->name('posts.create.page');
Route::post('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/update/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/delete/{post}', [PostController::class, 'delete'])->name('posts.delete');
Route::post('/posts/find', [PostController::class, 'find'])->name('posts.find');

//Commentaries
Route::post('/comment/create', [CommentaryController::class, 'create'])->name('comment.create');
Route::delete('/comment/delete', [CommentaryController::class, 'delete'])->name('comment.delete');

//Users
Route::get('users', [UserController::class, 'getAll'])->name('users');
Route::get('users/{id}', [UserController::class, 'userById'])->name('users.id');

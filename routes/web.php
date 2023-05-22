<?php

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

Route::get('/', function () {
    return view('home');
});


Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('home')->middleware('auth');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('posts/create', [App\Http\Controllers\PostController::class, 'create'])->middleware('auth');
Route::get('posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts')->middleware('auth');
Route::post('post', [App\Http\Controllers\PostController::class, 'store'])->middleware('auth');
Route::get('posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->middleware('auth');
Route::get('posts/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post');
Route::put('posts/{post}', [App\Http\Controllers\PostController::class, 'update'])->middleware('auth');
Route::delete('posts/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->middleware('auth');
Route::get('post/{subcategory}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::get('posts/{post}', [App\Http\Controllers\PostController::class, 'post'])->name('post.show');
Route::get('posts/createphotos', [App\Http\Controllers\PostController::class, 'photos'])->middleware('auth');
//category
Route::get('categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->middleware('auth');
Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories')->middleware('auth');
Route::post('categories', [App\Http\Controllers\CategoryController::class, 'store'])->middleware('auth');
Route::get('categories/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit')->middleware('auth');
Route::put('categories/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update')->middleware('auth');
Route::delete('categories/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->middleware('auth');
Route::get('/category/{id}', [App\Http\Controllers\CategoryController::class, 'show_user'])->name('category.show');
//subcategory
Route::get('subcategories/create', [App\Http\Controllers\SubcategoryController::class, 'create'])->middleware('auth');
Route::get('subcategories', [App\Http\Controllers\SubcategoryController::class, 'index'])->name('subcategories')->middleware('auth');
Route::post('subcategories', [App\Http\Controllers\SubcategoryController::class, 'store'])->middleware('auth');
Route::get('subcategories/{subcategory}/edit', [App\Http\Controllers\SubcategoryController::class, 'edit'])->name('subcategories.edit')->middleware('auth');
Route::put('subcategories/{subcategory}', [App\Http\Controllers\SubcategoryController::class, 'update'])->name('subcategories.update')->middleware('auth');
Route::delete('subcategories/{subcategory}', [App\Http\Controllers\SubcategoryController::class, 'destroy'])->middleware('auth');
Route::get('/subcategory/{id}', [App\Http\Controllers\SubcategoryController::class, 'show_user'])->name('subcategory.show');
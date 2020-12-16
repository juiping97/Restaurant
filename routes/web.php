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

Auth::routes();
//主頁面

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/follow/{user}', [App\Http\Controllers\FollowsController::class, 'store']);


Route::get('/favorite',[App\Http\Controllers\PostsController::class,'index']);

Route::get('/post/create',[App\Http\Controllers\PostsController::class,'create']);
Route::post('/post',[App\Http\Controllers\PostsController::class,'store']);
Route::get('/post/{post}',[App\Http\Controllers\PostsController::class,'show']);

Route::get('/profile/{user}',[App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit',[App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}',[App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');
Route::delete('/profile/{user}',[App\Http\Controllers\ProfilesController::class, 'destroy'])->name('profile.destroy');

Route::get('/front',[App\Http\Controllers\ProfilesController::class,'taiwan']);

Route::get('/explore',function(){
    return view('explore');
});

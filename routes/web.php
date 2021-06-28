<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\frontsiteController;
use App\Http\Controllers\dashboard;
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
Route::prefix('admin')->group(function () {
    Route::get('/', [dashboard\DashboardController::class, 'index'])->name('admin.home');;
    Route::resource('user', dashboard\UserController::class);
    Route::resource('post', dashboard\PostController::class);
    Route::resource('categories', dashboard\CategoryController::class);
    Route::resource('comment', dashboard\CommentController::class);
//    Route::post('/delete/{id}', [dashboard\CommentController::class ,'destroy'])->name('category.delete');
});

Route::get('/',[frontsiteController::class,'showhome']);
Route::get('/category',[frontsiteController::class,'showcategory']);
Route::get('/news', [frontsiteController::class,'shownewsdetails']);
Route::get('/search',[frontsiteController::class,'showsearch']);
Route::get('/sidebar',[frontsiteController::class,'showsidebar']);
Route::get('/about', [frontsiteController::class,'showabout']);
Route::get('/contact',[frontsiteController::class,'showcontact']);
Route::resource('user',dashboard\userController::class);
Route::resource('post',dashboard\PostController::class);

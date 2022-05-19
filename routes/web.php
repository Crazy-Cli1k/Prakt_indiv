<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::get ('/', [MainController::class, "acMain"]);

Route::get ('/news/{id}', [MainController::class, "acNews"]);

Route::get ('/MyPost/{id}', [MainController::class, "acGetPost"]);

Route::get ('/biography', [MainController::class, "acBiography"]);

Route::get ('/works', [MainController::class, "acWorks"]);

Route::get ('/blog', [MainController::class, "acBlog"]);

Route::get ('/about', [MainController::class, "acAbout"]);


//console
Route::get ('/console', [AdminController::class, "acConsole"]);

Route::get ('/console/update/type/{id}', [AdminController::class, "acConsoleTypeEditer"]);

Route::get ('/console/update/type/updated/{id}', [AdminController::class, "acConsoleTypeEditer"]);

Route::post ('/console/add/Type', [AdminController::class, "acConsoleFormAddNewType"]);

Route::post ('/admin/modification_type',  [AdminController::class, "acDataModificationType"]);

Route::get ('/admin/delete/type/{id}',  [AdminController::class, "acTypeDelete"]);

Route::get ('/console/update/post/{id}', [AdminController::class, "acConsolePostEditer"]);

Route::get ('/console/update/post/updated/{id}', [AdminController::class, "acConsolePostEditer"]);

Route::post ('/console/add/post', [AdminController::class, "acConsoleFormAddNewPost"]);

Route::post ('/admin/modification_post',  [AdminController::class, "acDataModificationPost"]);

Route::get ('/admin/delete/post/{id}',  [AdminController::class, "acPostDelete"]);


<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use illuminate\Support\Facades\Route;

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

Route::get("/",         [PagesController::class, "index"] );
Route::get("/about",    "PagesController@about" );
Route::get("/contact",  "PagesController@contact" );
Route::get("/services", "PagesController@services" );




Route::get("/posts", [PostsController::class, "index"] );
Route::get("/posts/create", [PostsController::class, "create"] );
Route::post("/posts/create", [PostsController::class, "store"] );
Route::get("/posts/{id}/edit", [PostsController::class, "edit"] );
Route::put("/posts/{id}", [PostsController::class, "update"] );
Route::delete("/posts/{id}/delete", [PostsController::class, "destroy"] );
Route::get("/posts/{id}", [PostsController::class, "show"] );
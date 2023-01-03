<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

use App\Http\Controllers\AlbumController;

//use App\Http\Controllers\Album1Controller;
//
//use App\Http\Controllers\Album2Controller;
//
//use App\Http\Controllers\Album3Controller;

use App\Http\Controllers\ImageController;

use App\Http\Controllers\UserController;
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

//Route::get('/', function () {
//    return view('welcome.blade.php');
//});

Route::get("/", [\App\Http\Controllers\Controller::class, "show"])->name('firstPage');

Route::get("/index", [IndexController::class, "show"])->name('index');

Route::get('/fotoAlbum1',[AlbumController::class,"showAlbum1"])->name('Album1');

Route::get('/fotoAlbum2',[AlbumController::class,"showAlbum2"])->name('Album2');

Route::get('/fotoAlbum3',[AlbumController::class,"showAlbum3"])->name('Album3');

Route::get('/fotoUpload',[ImageController::class, "show"])->name('fotoUpload');

Route::post('/fotoSubmit',[ImageController::class, "handlePhotoUpload"])->name('fotoSubmit');

Route::get("/login", [UserController::class, "showLogin"])->name('login');

Route::get('/logout',[UserController::class,'logOut'])->name('logout');

Route::post('/login',[UserController::class,'customLogin'])->name('loginSubmit');

Route::get('/register',[UserController::class,'showRegister'])->name('register');

Route::post('/registerUser',[UserController::class,'registerUser'])->name('registerUser');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Gue;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\Kategori;

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
//     return view('index');
// });


Route::get('/', [LoginController::class, 'index']);
Route::get('/register', [LoginController::class, 'create']);

Route::post('/tambahPhoto', [PhotosController::class, 'store']);
Route::get('/tambahPhoto', [PhotosController::class, 'create']);
Route::get('/home', [AlbumController::class, 'home']);
Route::get('/album', [AlbumsController::class, 'index']);
Route::get('/tambahAlbum', [AlbumController::class, 'create']);
Route::post('/tambahAlbum', [AlbumsController::class, 'store']);
Route::get('/kategori', [Kategori::class, 'index']);
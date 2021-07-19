<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gue;

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

Route::get('/', [Gue::class, 'home']);
Route::get('/login', [Gue::class, 'login']);
Route::get('/register', [Gue::class, 'register']);
Route::get('/album', [Gue::class, 'album']);
Route::get('/musik', [Gue::class, 'musik']);
Route::get('/tambah', [Gue::class, 'tambah']);
Route::get('/edit', [Gue::class, 'edit']);
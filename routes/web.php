<?php

use Illuminate\Support\Facades\Route;

// Berada pada folder modules
// dipanggil hanya 1 kali sebagai halaman utama
use Modules\Blog\Http\Controllers\BlogController;
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

// Route::get('/blog', function () {
//     return view('welcome');
// });

Route::get('/', [BlogController::class, 'index']);
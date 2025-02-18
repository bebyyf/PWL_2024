<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController; //digunakan untuk mengambil ItemController agar bisa digunakan dalam file laravel untuk pemanggilan metode controller.

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('items', ItemController::class); //digunakan untuk mendaftarkan semua crud secara otomatis.




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController
;
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
    return view('welcome');
});

Route::get('/blog',[blogController::class,'setBlog']);
Route::get('blog/list',[blogController::class,'getBlog'])->name('blog.get');

Route::get('create', [blogController::class,'create']);
Route::get('index', [blogController::class,'index']);
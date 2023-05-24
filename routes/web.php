<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;


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
    return view('login');
});

Route::post('/', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/user/{id}', function(){
    return view('userdashboard');
})->middleware('auth');

Route::get('/admin', function(){
    return view('admin');
}); 

Route::post('/pdf/download', [PDFController::class, 'download']);
Route::get('/admin/stats', [AdminController::class, 'getClickCounts']);
Route::get('/admin/create_user', [AdminController::class, 'createUser']);
Route::post('/admin/create_user', [AdminController::class, 'storeUser']);






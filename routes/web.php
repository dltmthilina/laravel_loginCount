<?php

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

Route::get('/user', function(){
  
    return view('userdashboard');
});

Route::get('/pdf/download', [PDFController::class, 'download']);






<?php

use App\Http\Controllers\siswaController;
use App\Http\Controllers\pembayaranController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[siswaController::class,'index']);
Route::get('/siswabayar/{id}',[siswaController::class,'getInfoSiswaById']);
Route::post('/simpanbayar',[pembayaranController::class,'simpanbayarspp']);
Route::get('/getpembayaran',[pembayaranController::class,'index']);
Route::get('/editbayar/{id}',[pembayaranController::class,'editbulanbayar']);
Route::put('/updatebayar/{id}',[pembayaranController::class,'updatebulanbayar'])->name('updatebayar');

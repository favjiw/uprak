<?php

use App\Http\Controllers\HotelayoController;
use App\Models\Hotelayo;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home');
});


Route::get('/hotels', [HotelayoController::class, 'index']);
Route::get('/add',[HotelayoController::class, 'create']);
Route::post('/updated',[HotelayoController::class, 'store']);
Route::get('/detail/{id}',[HotelayoController::class, 'show']);
Route::get('/hotel/edit/{id}', [HotelayoController::class, 'edit']);
Route::post('/hotel/updated/{id}', [HotelayoController::class, 'update']);


Route::delete('/delete/{id}',[HotelayoController::class, 'destroy']);

<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\TruckController;
use App\Models\Truck;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::get('/trucks/find/{name}',[TruckController::class, 'findName']);
    Route::post('/logout',[AuthController::class, 'logout']);
});

// Route::get('/trucks', [TruckController::class,'index']);
// Route::post('/trucks',[TruckController::class, 'store']);
// Route::delete('/trucks/',[TruckController::class, 'destroy']);
Route::resource('trucks',TruckController::class);
// Route::get('/trucks/find/{name}',[TruckController::class, 'findName']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login',[AuthController::class, 'login']);
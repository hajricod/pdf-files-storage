<?php

use App\Http\Controllers\Api\V1\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// public routes

Route::post('/register', [UsersController::class, 'register']);

// protected routes

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/file', function(){
        return 'hajricod';
    });
});

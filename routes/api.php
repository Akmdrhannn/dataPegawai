<?php

use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [UserController::class, 'buatUser']);
Route::post('/login', [UserController::class, 'loginUser']);

Route::get('/', function () {
    return response()->json([
        'status' => false,
        'message' => 'No access'
    ], 401);
})->name('login');


// Route::post('/login', [UserController::class, 'loginUser'])->middleware('auth:sanctum);
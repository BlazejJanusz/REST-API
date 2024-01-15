<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('janusz/313310/people', [PeopleController::class, 'index']);
Route::get('janusz/313310/people/{people}', [PeopleController::class, 'show']);
Route::post('janusz/313310/people', [PeopleController::class, 'store']);
Route::put('janusz/313310/people/{people}', [PeopleController::class, 'update']);
Route::delete('janusz/313310/people/{people}', [PeopleController::class, 'destroy']);

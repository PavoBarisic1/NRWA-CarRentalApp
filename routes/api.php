<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarApiController;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\FeedbackApiController;

/**
 * @OA\Info(
 *     title="Rent-a-Car API",
 *     version="1.0.0",
 *     description="API documentation for Rent-a-Car application",
 *     @OA\Contact(
 *         email="info@rentacar.com"
 *     )
 * )
 */

Route::apiResource('cars', CarApiController::class);
Route::apiResource('users', UserApiController::class);
Route::apiResource('feedbacks', FeedbackApiController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

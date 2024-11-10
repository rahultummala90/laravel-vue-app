<?php

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

// API Routes (if needed)
Route::prefix('api')->group(function () {
    // Add your API routes here
    Route::get('/example', function () {
        return response()->json([
            'message' => 'Hello from Laravel!'
        ]);
    });
});

// Catch all route for Vue Router
Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '.*');

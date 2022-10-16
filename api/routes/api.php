<?php

use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\InitController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
// Route::middleware(['\AntiPatternInc\Saasus\Laravel\Middleware\Auth::class'])->group(function () {
    // Route::middleware(['IsCloudFront','\AntiPatternInc\Saasus\Laravel\Middleware\Auth::class'])->group(function () {

    Route::prefix('v1')->group(function () {
        Route::get('/test', function(){
            return "test";
        });
    });
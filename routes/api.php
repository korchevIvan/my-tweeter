<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/timeline', [\App\Http\Controllers\Api\Timeline\TimelineController::class, 'index']);

Route::post('/tweets', [\App\Http\Controllers\Api\Tweets\TweetController::class, 'store']);

Route::post('/tweets/{tweet}/likes', [\App\Http\Controllers\Api\Tweets\TweetLikeController::class, 'store']);
Route::delete('/tweets/{tweet}/likes', [\App\Http\Controllers\Api\Tweets\TweetLikeController::class, 'destroy']);

Route::post('/tweets/{tweet}/retweets', [\App\Http\Controllers\Api\Tweets\TweetRetweetController::class, 'store']);
Route::delete('/tweets/{tweet}/retweets', [\App\Http\Controllers\Api\Tweets\TweetRetweetController::class, 'destroy']);

Route::post('/tweets/{tweet}/quotes', [\App\Http\Controllers\Api\Tweets\TweetQuoteController::class, 'store']);

Route::post('/media', [\App\Http\Controllers\Api\Media\MediaController::class, 'store']);
Route::get('/media/types', [\App\Http\Controllers\Api\Media\MediaTypesController::class, 'index']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoutubeVideoController;

Route::get('api/videos', [YoutubeVideoController::class, 'get']);
Route::get('api/videos/search', [YoutubeVideoController::class, 'search']);
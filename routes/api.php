<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;

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

Route::get('articles', [ArticleController::class, 'index']);
Route::get('articles/{path}', [ArticleController::class, 'show']);
Route::post('articles', [ArticleController::class, 'store']);
Route::put('articles/{path}', [ArticleController::class, 'update']);
Route::delete('articles/{path}', [ArticleController::class, 'delete']);
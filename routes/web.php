<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentReplyController;

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

Route::get('/', [ThreadController::class, 'index']);
Route::post('/post', [ThreadController::class, 'store']);
Route::post('/{thread_id}/comment', [CommentController::class, 'store']);
Route::post('/{thread_id}/{comment_id}/reply', [CommentReplyController::class, 'store']);
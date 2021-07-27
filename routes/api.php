<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
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
Route::prefix('v1')->group(function () {
        Route::prefix('todos')->group(function () {
            Route::get('getall',[TodosController::class,'getAll']);
            Route::get('insert',[TodosController::class,'insert']);
            Route::get('update',[TodosController::class,'update']);
            Route::get('delete',[TodosController::class,'delete']);
        });
        Route::prefix('posts')->group(function () {
            Route::get('/',[PostController::class,'index']);
            Route::get('/{id}',[PostController::class,'getDetail']);
            Route::get('/getCount',[PostController::class,'getCount']);
            Route::get('/store',[PostController::class,'store']);
            Route::get('/update',[PostController::class,'update']);
        });
        Route::prefix('category')->group(function () {
            Route::get('/',[CategoryController::class,'getAll']);
        });
        Route::prefix('tags')->group(function () {
            Route::get('/',[TagsController::class,'getAll']);
        });
        Route::prefix('comment')->group(function () {
            Route::get('/:id',[CommentController::class,'getAllByPostId']);
            Route::get('/store/:id',[CommentController::class,'store']);
        });

        });

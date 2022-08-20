<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\Admin\NewsController as AdminNewsController;
use \App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

Route::get('/', function () {
    return view('index');
});

Route::get('/news', [NewsController::class, 'index']);

Route::get('/news/{id}', [NewsController::class, 'show']);

Route::get('/news-category', [CategoryController::class, 'index']);

Route::get('/news/category/{category}', [CategoryController::class, 'show']);

Route::get('admin/news', [AdminNewsController::class, 'index']);

Route::get('admin/categories', [AdminCategoryController::class, 'index']);

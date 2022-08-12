<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', function (string $name) {
    return "Привет $name";
});

Route::get('/info', function () {
    return "Новостной проект";
});

Route::get('/news/{newsId}', function (int $newsId) {
    $newsList = [
        'Новость-1',
        'Новость-2',
        'Новость-3',
        'Новость-4',
        'Новость-5',
    ];
    return $newsList[$newsId - 1];
});

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\index;

Route::get('/', function () {
    return view('welcome');
});


Route::get('index', [index::class, 'view_index']);
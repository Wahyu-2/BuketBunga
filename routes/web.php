<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

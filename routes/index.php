<?php

use App\Http\Controllers\Spp;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index.index');
});
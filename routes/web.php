<?php

use App\Http\Controllers\Dashboard;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard/data-santri', [Dashboard::class, 'view'])->name('dashboard/data-santri');
    Route::post('/dashboard/data-santri/store', [Dashboard::class, 'store']);
    Route::get('/dashboard/data-santri/cari', [Dashboard::class, 'search']);
    Route::get('/dashboard/data-santri/detail/{any}', [Dashboard::class, 'detail']);
    Route::get('/dashboard/data-santri/input-data/', [Dashboard::class, 'inputData']);
    Route::post('/dashboard/data-santri/input-data/', [Dashboard::class, 'inputDataStore']);
    

});

require __DIR__.'/auth.php';

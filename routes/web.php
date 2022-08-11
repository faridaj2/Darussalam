<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Data;
use App\Http\Controllers\MoneyDepositController;
use App\Models\student;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Worksheet\Row;
use Yajra\Datatables\Datatables;

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
    //Data Santri
    Route::get('/dashboard/data-santri', [Dashboard::class, 'view'])->name('dashboard/data-santri');
    Route::post('/dashboard/data-santri/store', [Dashboard::class, 'store']);
    Route::get('/dashboard/data-santri/cari', [Dashboard::class, 'search']);
    Route::get('/dashboard/data-santri/detail/{any}', [Dashboard::class, 'detail']);
    Route::get('/dashboard/data-santri/input-data/', [Dashboard::class, 'inputData']);
    Route::post('/dashboard/data-santri/input-data/', [Dashboard::class, 'inputDataStore']);
    Route::get('/dashboard/data-santri/delete/{id}/', [Dashboard::class, 'deleteData']);
    Route::get('/dashboard/data-santri/edit/{id}/', [Dashboard::class, 'editData']);
    Route::post('/dashboard/data-santri/editData/', [Dashboard::class, 'editDataStore']);
    Route::get('/dashboard/mass-data', [Dashboard::class, 'getData']);

    //Penitipan Uang    
    Route::get('/dashboard/penitipan-uang', [MoneyDepositController::class, 'index'])->name('dashboard/penitipan-uang');
    Route::post('/dashboard/penitipan-uang/tambah-kategori', [MoneyDepositController::class, 'createCategory']);
    Route::get('/dashboard/penitipan-uang/{slug}/hapus', [MoneyDepositController::class, 'destroy']);
    Route::get('/dashboard/penitipan-uang/{slug}', [MoneyDepositController::class, 'showKategori']);


});


//Download Data Santri Dalam Eccell
Route::get('getUser', function (Request $request) {
    if ($request->ajax()) {
            $data = student::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function($row){
                    $btnname = '<a href="/dashboard/data-santri/detail/'.$row->id.'" class="edit btn btn-success btn-sm">'.$row->nama.'</a>';

                    return $btnname;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="/dashboard/data-santri/edit/'.$row->id.'" class="edit btn btn-success btn-sm">Edit</a> <a href="#m1" onclick="getData(this)" data-id="'.$row->id.'"
                    data-name="'.$row->nama.'" rel="modal:open" class="">Delete</a>';

                    return $actionBtn;
                })
                ->rawColumns(['action', 'name'])
                ->make(true);
        }
})->name('user.index'); 

require __DIR__.'/auth.php';

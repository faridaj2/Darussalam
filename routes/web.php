<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Data;
use App\Http\Controllers\MdListController;
use App\Http\Controllers\MoneyDepositController;
use App\Http\Controllers\MoneyReController;
use App\Http\Controllers\Spp;
use App\Models\money_re;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::prefix('dashboard/')->middleware(['auth'])->group(function () {
    //Data Santri
    Route::get('data-santri', [Dashboard::class, 'view'])->name('dashboard/data-santri');
    Route::post('data-santri/store', [Dashboard::class, 'store'])->name('add-from-excel');
    Route::get('data-santri/cari', [Dashboard::class, 'search']);
    Route::get('data-santri/detail/{any}', [Dashboard::class, 'detail']);
    Route::get('data-santri/input-data/', [Dashboard::class, 'inputData']);
    Route::post('data-santri/input-data/', [Dashboard::class, 'inputDataStore'])->name('input-data-siswa');
    Route::get('data-santri/delete/{id}/', [Dashboard::class, 'deleteData']);
    Route::get('data-santri/edit/{id}/', [Dashboard::class, 'editData']);
    Route::put('data-santri/editData/', [Dashboard::class, 'editDataStore'])->name('edit-data-siswa');
    Route::get('mass-data', [Dashboard::class, 'getData']);
    Route::get('data-santri/mass/delete', [Dashboard::class, 'massDelete']);

    //Penitipan Uang
    Route::get('penitipan-uang', [MoneyDepositController::class, 'index'])->name('dashboard/penitipan-uang');
    Route::post('penitipan-uang/tambah-kategori', [MoneyDepositController::class, 'createCategory'])->name('input-penitipan-uang');
    Route::get('penitipan-uang/{slug}/hapus', [MoneyDepositController::class, 'destroy']);
    Route::get('penitipan-uang/{slug}', [MoneyDepositController::class, 'showKategori']);
    Route::get('penitipan-uang/{slug}/insert', [MoneyDepositController::class, 'insertStudent']);

    Route::get('/deposite/detail/{id}',[MoneyDepositController::class, 'detail']);
    Route::get('/deposite/{id}/delete',[MoneyDepositController::class, 'delete']);

    //SPP & Kos

    Route::get('spp-kos', [Spp::class, 'index'])->name('dashboard/spp-kos');




});

Route::resource('/dashboard/money', MoneyReController::class);


//Download Data Santri Dalam Excell
Route::get('getUser', function (Request $request) {
    if ($request->ajax()) {
        $data = student::get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('name', function ($row) {
                $btnname = '<a href="/dashboard/data-santri/detail/' . $row->id . '" class="p-0 btn btn-link">' . $row->nama . '</a>';

                return $btnname;
            })
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="/dashboard/data-santri/edit/' . $row->id . '" class="edit btn btn-primary btn-sm"><i class="fad fa-edit"></i></a> ';

                return $actionBtn;
            })
            ->rawColumns(['action', 'name'])
            ->make(true);
    }
})->name('user.index');

require __DIR__ . '/auth.php';
require __DIR__ . '/spp.php';
require __DIR__ . '/index.php';
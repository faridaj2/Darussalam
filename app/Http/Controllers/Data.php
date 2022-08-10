<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Yajra\Datatables\Datatables;
use App\Models\student;

use Illuminate\Http\Request;

class Data extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view('penitipan-uang');
    }
    public function storeKategori(Request $request){
        dd($request);
    }
}

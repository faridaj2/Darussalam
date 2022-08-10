<?php

namespace App\Http\Controllers;

use App\Models\money_deposit;
use App\Http\Requests\Storemoney_depositRequest;
use App\Http\Requests\Updatemoney_depositRequest;
use Illuminate\Http\Request;

class MoneyDepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'kategori' => money_deposit::get()
        ];
        return view('penitipan-uang', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCategory(Request $request){
        $db = new money_deposit();
        $db::create([
            'nama_penyimpanan' => $request->kategori,
        ]);
        return redirect()->back();
    }
    public function destroy($slug)
    {   $id = money_deposit::firstWhere('slug', $slug)->id;
        money_deposit::destroy($id);
        return redirect()->back();
        

    }






    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storemoney_depositRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemoney_depositRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\money_deposit  $money_deposit
     * @return \Illuminate\Http\Response
     */
    public function show(money_deposit $money_deposit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\money_deposit  $money_deposit
     * @return \Illuminate\Http\Response
     */
    public function edit(money_deposit $money_deposit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemoney_depositRequest  $request
     * @param  \App\Models\money_deposit  $money_deposit
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemoney_depositRequest $request, money_deposit $money_deposit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\money_deposit  $money_deposit
     * @return \Illuminate\Http\Response
     */
    // public function destroy(money_deposit $money_deposit)
    // {
    //     //
    // }
}

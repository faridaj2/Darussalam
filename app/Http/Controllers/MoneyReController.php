<?php

namespace App\Http\Controllers;

use App\Models\money_re;
use App\Http\Requests\Storemoney_reRequest;
use App\Http\Requests\Updatemoney_reRequest;
use Illuminate\Http\Request;

class MoneyReController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storemoney_reRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        money_re::create([
            'md_list_id' => $request->id,
            'uang_masuk' => $request->_put,
            'uang_keluar' => $request->_get,
            'uang_total' => $request->_total
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\money_re  $money_re
     * @return \Illuminate\Http\Response
     */
    public function show(money_re $money_re)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\money_re  $money_re
     * @return \Illuminate\Http\Response
     */
    public function edit(money_re $money_re)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemoney_reRequest  $request
     * @param  \App\Models\money_re  $money_re
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemoney_reRequest $request, money_re $money_re)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\money_re  $money_re
     * @return \Illuminate\Http\Response
     */
    public function destroy(money_re $money_re)
    {
        //
    }
}

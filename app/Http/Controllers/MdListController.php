<?php

namespace App\Http\Controllers;

use App\Models\md_list;
use App\Http\Requests\Storemd_listRequest;
use App\Http\Requests\Updatemd_listRequest;
use Illuminate\Http\Request;


class MdListController extends Controller
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
     * @param  \App\Http\Requests\Storemd_listRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemd_listRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\md_list  $md_list
     * @return \Illuminate\Http\Response
     */
    public function show(md_list $md_list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\md_list  $md_list
     * @return \Illuminate\Http\Response
     */
    public function edit(md_list $md_list)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemd_listRequest  $request
     * @param  \App\Models\md_list  $md_list
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemd_listRequest $request, md_list $md_list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\md_list  $md_list
     * @return \Illuminate\Http\Response
     */
    public function destroy(md_list $md_list)
    {
        //
    }
}

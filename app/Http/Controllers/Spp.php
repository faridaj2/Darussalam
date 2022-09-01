<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\spp_list;

class Spp extends Controller
{
    public function index(){
        return view('spp.spp');
    }
    //Make controller
    public function create(){
        return view('spp.create');
    }
    public function store(Request $request){
        $request->validate([
            'nama_pemabayaran' => 'required',
            'range_awal' => 'required',
            'range_akhir' => 'required',
            'nominal_default' => 'required',
            'nominal_per_bulan' => 'required',
            'status' => 'required'
        ]);
        $spp = new spp_list;
        $spp->nama_pemabayaran = $request->nama_pemabayaran;
        $spp->range_awal = $request->range_awal;
        $spp->range_akhir = $request->range_akhir;
        $spp->nominal_default = $request->nominal_default;
        $spp->nominal_per_bulan = $request->nominal_per_bulan;
        $spp->status = $request->status;
        $spp->save();
        return redirect('/spp')->with('success', 'Data berhasil ditambahkan');
    }
    public function edit($id){
        $spp = spp_list::find($id);
        return view('spp.edit', compact('spp'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'nama_pemabayaran' => 'required',
            'range_awal' => 'required',
            'range_akhir' => 'required',
            'nominal_default' => 'required',
            'nominal_per_bulan' => 'required',
            'status' => 'required'
        ]);
        $spp = spp_list::find($id);
        $spp->nama_pemabayaran = $request->nama_pemabayaran;
        $spp->range_awal = $request->range_awal;
        $spp->range_akhir = $request->range_akhir;
        $spp->nominal_default = $request->nominal_default;
        $spp->nominal_per_bulan = $request->nominal_per_bulan;
        $spp->status = $request->status;
        $spp->save();
        return redirect('/spp')->with('success', 'Data berhasil diubah');
    }
    public function delete($id){
        $spp = spp_list::find($id);
        $spp->delete();
        return redirect('/spp')->with('success', 'Data berhasil dihapus');
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\spp_list;
use DateTime, DateInterval, DatePeriod;
use App\Models\tb_nama_pembayaran as nameSpp;

class Spp extends Controller
{
    public function index()
    {
        return view('spp.spp');
    }
    //Make controller
    public function create()
    {
        return view('spp.create');
    }
    public function store(Request $request)
    {
        $sd = $request->bulan_awal_pembayaran;
        $ld = $request->bulan_akhir_pembayaran;

        $validated = $request->validate([
            'nama_pembayaran' => 'required|unique:tb_nama_pembayarans|max:255',
            'bulan_awal_pembayaran' => 'required',
            'bulan_akhir_pembayaran' => 'required',
            'nilai_default' => 'required',
            'status' => 'required'
        ]);

        $n1 = $request->bulan_awal_pembayaran;
        $n2 = $request->bulan_akhir_pembayaran;

        $c1 = strtotime($n1);
        $c2 = strtotime($n2);

        if ($c1 > $c2) {
            return redirect()->back()->with(['danger' => 'Bulan awal pemayaran harus lebih kecil']);
        }


        

        // Enter your code here, enjoy!
        $start    = (new DateTime($sd))->modify('first day of this month');
        $end      = (new DateTime($ld))->modify('first day of next month');
        $interval = DateInterval::createFromDateString('1 month');
        $period   = new DatePeriod($start, $interval, $end);

        function tanggal_indo($tanggal)
        {
            $bulan = array(
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $split = explode('-', $tanggal);
            return $split[0] . ' ' . $bulan[(int)$split[1]];
        }
        $tb_nama = nameSpp::create([
            'nama_pembayaran' => $request->nama_pembayaran,
            'bulan_awal' => $request->bulan_awal_pembayaran,
            'bulan_akhir' => $request->bulan_akhir_pembayaran,
            'nilai_default' => $request->nilai_default,
            'status' => $request
        ]);


        foreach ($period as $dt) {
            echo tanggal_indo($dt->format("Y-m")) . "</br>";
        }
    }
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
    }
    public function delete($id)
    {
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp_list extends Model
{
    use HasFactory;
    public function tb_nama_pembayaran()
    {
        return $this->belongsTo(tb_nama_pembayaran::class);
    }
    public function student()
    {
        return $this->belongsTo(student::class);
    }
    public function bulan_spp()
    {
        return $this->belongsTo(bulan_spp::class);
    }
}

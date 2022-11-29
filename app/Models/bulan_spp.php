<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bulan_spp extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tb_nama_pembayaran(){
        return $this->belongsTo(tb_nama_pembayaran::class);
    }
}

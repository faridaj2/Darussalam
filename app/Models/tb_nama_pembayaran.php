<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_nama_pembayaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function bulan_spp()
    {
        return $this->hasMany(bulan_spp::class);
    }
    public function tb_spp_list_student()
    {
        return $this->hasMany(tb_spp_list_student::class);
    }
}

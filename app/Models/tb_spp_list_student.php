<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_spp_list_student extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tb_nama_pembayaran(){
        return $this->belongsTo(tb_nama_pembayaran::class);
    }
    public function student()
    {
        return $this->belongsTo(student::class);
    }
}

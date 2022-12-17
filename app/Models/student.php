<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function md_list()
    {
        return $this->hasMany(md_list::class);
    }
    public function tb_spp_list_student()
    {
        return $this->hasMany(tb_spp_list_student::class);
    }
    public function spp_list()
    {
        return $this->hasMany(spp_list::class);
    }
}

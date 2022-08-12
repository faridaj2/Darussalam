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
}

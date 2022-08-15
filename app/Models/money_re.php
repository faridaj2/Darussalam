<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class money_re extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function md_list()
    {
        return $this->belongsTo(md_list::class);
    }
}

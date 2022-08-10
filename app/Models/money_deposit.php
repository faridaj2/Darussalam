<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class money_deposit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_penyimpanan'
            ]
        ];
    }
}

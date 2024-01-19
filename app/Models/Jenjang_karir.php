<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenjang_karir extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenjang_karir',
    ];

    public function detail_alumni()
    {
        return $this->hasMany(Detail_alumni::class, 'id_jenjang_karir', 'id');
    }
}

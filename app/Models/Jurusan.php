<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jurusan',
    ];

    public function detail_alumni()
    {
        return $this->hasOne(Detail_alumni::class, 'id_jurusan', 'id');
    }
}

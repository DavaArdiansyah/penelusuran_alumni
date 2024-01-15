<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunLulus extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun_lulus',
    ];

    public function detail_alumni()
    {
        return $this->hasMany(DetailAlumni::class, 'id_jurusan','id');
    }
}

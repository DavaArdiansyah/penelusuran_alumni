<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_jurusan',
    ];

    public function detail_alumni()
    {
        return $this->hasMany(DetailAlumni::class, 'id_jurusan', 'id');
    }
}

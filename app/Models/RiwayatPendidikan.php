<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_data_alumnis', //one to one
        'jenjang_pendidikan',
        'pengalaman_organisasi'
    ];

    public function data_alumni()
    {
        $this->belongsTo(DataAlumni::class, 'id_data_alumnis');
    }
}

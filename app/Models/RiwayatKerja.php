<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_data_alumni', //one to one
        'nama_perusahaan',
        'alamat_pekerjaan',
        'jabatan',
    ];

    public function data_alumni()
    {
        $this->belongsTo(DataAlumni::class, 'id_data_alumnis');
    }
}

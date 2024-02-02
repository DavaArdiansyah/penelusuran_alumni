<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAlumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_users', //pne to one
        'id_raw_data_alumnis', //one to one
        'jenis_kelamin',
        'tanggal_lahir',
        'no_telp',
        'alamat',
        'sosial_media',
        'foto'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
    public function raw_data_alumni()
    {
        return $this->belongsTo(RawDataAlumni::class, 'id_raw_data_alumnis');
    }
    public function riwayat_kerja()
    {
        $this->hasOne(RiwayatKerja::class, 'id_data_alumnis');
    }
    public function riwayat_pendidikan()
    {
        $this->hasOne(RiwayatPendidikan::class, 'id_data_alumnis');
    }
}

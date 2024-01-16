<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisn',
        'id_user', //one to one
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'sosial_media',
        'id_jurusan', //one to many
        'tahun_lulus',
        'no_ijazah',
        'foto',
        'jenjang_karir'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
    }
}

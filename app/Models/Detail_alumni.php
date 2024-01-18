<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisn',
        'id_users',
        'jenis_kelamin',
        'alamat',
        'media_sosial',
        'id_jurusan',
        'tahun_lulus',
        'no_ijazah',
        'id_jenjang_karir',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan','id');
    }
    public function jenjang_karir()
    {
        return $this->belongsTo(Jenjang_karir::class, 'id_jenjang_karir','id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'id_users','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAlumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisn',
        'id_users',
        'jenis_kelamin',
        'alamat',
        'media_sosial',
        'id_jurusan',
        'id_tahun_lulus',
        'no_ijazah',
        'id_jenjang_karir',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan','id');
    }
    public function tahun_lulus()
    {
        return $this->belongsTo(TahunLulus::class, 'id_tahun_lulus','id');
    }
    public function jenjang_karir()
    {
        return $this->belongsTo(JenjangKarir::class, 'id_jenjang_karir','id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'id_users','id');
    }
}

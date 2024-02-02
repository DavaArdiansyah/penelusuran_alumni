<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class NonAlumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_users', //one to one
        'nama_lengkap',
        'jenis_kelamin',
        'no_telp',
        'tanggal_lahir',
        'alamat',
        'sosial_media',
        'foto'
    ];

    public function user()
    {
        $this->hasOne(User::class, 'id_users');
    }
}

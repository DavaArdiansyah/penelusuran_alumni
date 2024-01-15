<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUsers extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_users',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'sosial_media',
        'foto',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_users','id');
    }
}

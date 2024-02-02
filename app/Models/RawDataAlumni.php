<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawDataAlumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisn',
        'nama_lengkap',
        'program_keahlian',
    ];

    public function data_alumni()
    {
        $this->hasOne(DataAlumni::class, 'id_raw_data_alumnis');
    }
}

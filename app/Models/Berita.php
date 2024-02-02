<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = [
        'deskripsi_berita',
        'id_kategoris' //one to many
    ];

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'id_kategoris');
    }
}

<?php

namespace Database\Seeders;

use App\Models\Detail_alumni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Detail_alumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Detail_alumni::create([
            'nisn' => '1234567890',
            'id_user' => 3, //foreign 
            'tanggal_lahir' => "2024-01-15",
            'jenis_kelamin' => 'Laki laki',
            'Alamat' => 'Bandung',
            'sosial_media' => 'rasyad',
            'id_jurusan' => 1, //foreign
            'tahun_lulus' => "2024",
            'no_ijazah' => '1234567890',
            'foto' => 'foto',
            'jenjang_karir' => 'Bekerja'
        ]);
    }
}

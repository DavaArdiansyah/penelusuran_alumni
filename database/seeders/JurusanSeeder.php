<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jurusan::create([
            "jurusan" => "RPL",
        ]);
        Jurusan::create([
            "jurusan" => "TJKT",
        ]);
        Jurusan::create([
            "jurusan" => "DKV",
        ]);
        Jurusan::create([
            "jurusan" => "MLOG",
        ]);
        Jurusan::create([
            "jurusan" => "MP",
        ]);
        Jurusan::create([
            "jurusan" => "BR",
        ]);
        Jurusan::create([
            "jurusan" => "AK",
        ]);
    }
}

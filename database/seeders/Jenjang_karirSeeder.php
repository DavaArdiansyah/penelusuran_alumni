<?php

namespace Database\Seeders;

use App\Models\Jenjang_karir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Jenjang_karirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jenjang_karir::create([
            'jenjang_karir' => 'Bekerja',
        ]);
        Jenjang_karir::create([
            'jenjang_karir' => 'Kuliah',
        ]);
        Jenjang_karir::create([
            'jenjang_karir' => 'Wirausaha',
        ]);
        Jenjang_karir::create([
            'jenjang_karir' => 'Belum Bekerja',
        ]);
    }
}

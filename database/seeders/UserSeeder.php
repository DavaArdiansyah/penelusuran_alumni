<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Gultom Julius',
            'email' => 'gultom@mail.com',
            'password' => Hash::make('12345678'),
            'no_telp' => '081234567810',
            'id_role' => 3
        ]);

        User::create([
            'name' => 'Fahal Malik',
            'email' => 'fahal@mail.com',
            'password' => Hash::make('12345678'),
            'no_telp' => '081234567810',
            'id_role' => 2
        ]);

        User::create([
            'name' => 'Rasyad Atha',
            'email' => 'rasyad@mail.com',
            'password' => Hash::make('12345678'),
            'no_telp' => '081234567810',
            'id_role' => 1
        ]);
    }
}

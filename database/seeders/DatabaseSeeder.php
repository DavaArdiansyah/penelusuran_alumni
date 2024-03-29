<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Detail_alumni;
use App\Models\Jenjang_karir;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
                // \App\Models\User::factory(10)->create();

                // \App\Models\User::factory()->create([
                //     'name' => 'Test User',
                //     'email' => 'test@example.com',
                // ]);
                $this->call(RoleSeeder::class);
                $this->call(JurusanSeeder::class);
                $this->call(UserSeeder::class);
                $this->call(Jenjang_karirSeeder::class);
                $this->call(Detail_alumniSeeder::class);
        }
}

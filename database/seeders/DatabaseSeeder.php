<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\DetailPenyakit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeed::class);
        $this->call(PenyakitSeeder::class);
        $this->call(GejalaSeeder::class);
        $this->call(ObatSeeder::class);
        // User::factory(60)->create();
        // \App\Models\Penyakit::factory(8)->create();
        // \App\Models\Gejala::factory(51)->create();
        // \App\Models\Aturan::factory(40)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

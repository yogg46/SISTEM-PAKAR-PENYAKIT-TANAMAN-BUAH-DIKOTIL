<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'namaPengguna' => 'Fabio user',
            'jenisKelamin' => 'Laki-laki',
            'username' => 'fabio1',
            'password' =>  bcrypt('password'),
            'alamat' => 'kk',
            'userRole' => 'user',
            // 'gambar' => '123213'
        ]);
        User::create([
            // 'idUser' => 'Petani-1',
            // 'key' => 'Petani-1',
            'namaPengguna' => 'Fabio user2',
            'jenisKelamin' => 'Laki-laki',
            'username' => 'fabio12',
            'password' =>  bcrypt('password'),
            'alamat' => 'kk',
            'userRole' => 'user',
            // 'gambar' => '123213'
        ]);
        User::create([
            'namaPengguna' => 'Fabio admin',
            'jenisKelamin' => 'Laki-laki',
            'username' => 'fabio2',
            'password' =>  bcrypt('password'),
            'alamat' => 'kk',
            'userRole' => 'admin',
            // 'gambar' => '123213'
        ]);
        User::create([
            'namaPengguna' => 'Fabio pemilik',
            'jenisKelamin' => 'Laki-laki',
            'username' => 'fabio3',
            'password' =>  bcrypt('password'),
            'alamat' => 'kk',
            'userRole' => 'pemilik',
            // 'gambar' => '123213'
        ]);

    }
}

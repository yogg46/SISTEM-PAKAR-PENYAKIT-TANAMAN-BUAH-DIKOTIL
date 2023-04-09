<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Obat::create([
            'namaObat'=> 'Velimex 80WP dan Bubur Bordeaux',
            'cara'=> 'Penyemprotan secara rutin 14 hari sekali dengan dosis 2-2,5 gram/liter',
            'jenis'=> 'Fungisida berbahan aktif maneb',
            'khasiat'=> 'Fungisida sistemik berbentuk tepung berwarna kuning yang dapat di suspensikan untuk mengendalikan hama penyakit pada tanaman buah hortikultura khususnya buah dan sayuran',
            'idPenyakit'=> "P-01"

        ]);

        Obat::create([
            'namaObat'=> 'Masalgin 50WP dan Karbendazim',
            'cara'=> 'Penyemprotan secara rutin 7 hari sekali dengan dosis 1-2 gram/liter',
            'jenis'=> 'Fungisida berbahan aktif benomyl',
            'khasiat'=> 'Fungisida berbahan aktif benomil 50% yang berbentuk tepung yang dapat di suspensikan dengan formulasi Werrable Powder (WP) berwarna putih kekuning-kuningan, cukup efektif memberantas penyakit tanaman dengan cara masuk kedalam jaringan  sel tanaman (sistemik)',
            'idPenyakit'=> "P-02"

        ]);

        Obat::create([
            'namaObat'=> 'Karbolinum dan Difolatan 4F 3%',
            'cara'=> 'Kerok bagian yang luka dan oleskan Karbolinum dan Difolatan secara rutin sampai luka tertutup',
            'jenis'=> 'Fungisida berbahan aktif tembaga',
            'khasiat'=> 'Fungisida digunakan untuk melindungi tanaman dari serangan jamur dan insektisida digunakan untuk membunuh serangga pengganggu, Kedua bahan kimia tersebut mengandung senyawa organofosfat yang berpotensi sangat berbahaya bagi manusia dan hewan',
            'idPenyakit'=> "P-03"

        ]);

        Obat::create([
            'namaObat'=> 'Banlate',
            'cara'=> 'Pengendaliannya diberikan fungisida jenis benlate 0,3% dengan dosis sesuai tertera pada kemasan atau 8 tutup botol dengan 14 liter air',
            'jenis'=> 'Fungisida berbahan aktif benomyl',
            'khasiat'=> 'Fungisida sistemik yang sering digunakan untuk melawan berbagai jenis jamur patogen pada tanaman, termasuk busuk akar, banlate akan diserap oleh tanaman dan menyebar ke seluruh jaringan, sehingga melindungi tanaman dari serangan jamur patogen dan membantu mempercepat penyembuhan tanaman yang terinfeksi.',
            'idPenyakit'=> "P-04"

        ]);

        Obat::create([
            'namaObat'=> 'Propiconazole dan Tebuconazole',
            'cara'=> 'Pengendaliannya diberikan fungisida jenis propiconazole atau tebuconazole dengan dosis sekitar 0,1-0,2% (berdasarkan volume) dari larutan yang disiapkan.',
            'jenis'=> 'Fungisida berbahan aktif propiconazole dan tebuconazole',
            'khasiat'=> 'Fungisida sistemik yang digunakan untuk mengendalikan pertumbuhan jamur pada tanaman dan rendah toksisitas terhadap manusia dan hewan, sehingga dapat digunakan dengan aman tanpa merusak lingkungan sekitar.',
            'idPenyakit'=> "P-05"

        ]);

        Obat::create([
            'namaObat'=> 'Kaptan dan Mancozeb',
            'cara'=> 'Pengendaliannya diberikan fungisida jenis kaptan atau mancozeb dengan dosis sekitar 2-4 gram/liter air dalam interval 7-14 hari.',
            'jenis'=> 'Fungisida berbahan aktif captan dan mancozeb',
            'khasiat'=> 'Fungisida ini bekerja dengan cara membunuh jamur pada permukaan tanaman dan mencegah perkembangan lebih lanjut dari penyakit tersebut. Namun, pemilihan jenis fungisida yang tepat tergantung pada jenis tanaman yang terkena penyakit dan tingkat keparahan penyakitnya.',
            'idPenyakit'=> "P-06"

        ]);

        Obat::create([
            'namaObat'=> 'Supracide atau Cascade',
            'cara'=> 'Campurkan insektisida dengan air dalam jumlah yang sesuai, biasanya 1-2 ml insektisida per liter air, lalu semprotkan insektisida secara merata ke seluruh bagian tanaman, termasuk bagian atas dan bawah daun, tangkai daun, dan batang, hingga basah.',
            'jenis'=> 'Fungisida berbahan aktif cypermethrin dan chlorpyrifos',
            'khasiat'=> 'Insektisida tersebut efektif dalam mengendalikan serangga pengganggu pada tanaman, namun perlu diingat bahwa penggunaan insektisida harus dilakukan dengan hati-hati dan sesuai dengan dosis yang dianjurkan.',
            'idPenyakit'=> "P-07"

        ]);

        Obat::create([
            'namaObat'=> 'Captan dan Propiconazole',
            'cara'=> 'Penyemprotan fungisida kaptan dengan dosis 1-2 kg/ha, dan fungisida propiconazole dengan dosis 0,1-0,2% dari kemasan dalam interval yang sama 7-14 har .',
            'jenis'=> 'Fungisida berbahan captan dan propiconazole',
            'khasiat'=> 'Kombinasi pemberian obat captan dan propiconazole dapat memberikan hasil yang lebih efektif dalam mengatasi penyakit cendawan tepung pada tanaman. Keduanya dapat saling melengkapi dalam membunuh dan mencegah pertumbuhan jamur penyebab penyakit pada tanaman.',
            'idPenyakit'=> "P-08"

        ]);
    }
}

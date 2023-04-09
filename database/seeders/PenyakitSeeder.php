<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Penyakit::create([
                'namaPenyakit' => '(P-01) Busuk Buah',
                'keterangan'=> 'Busuk Buah dapat timbul pada berbagai umur buah, sejak buah masih kecil sampai menjelang masak. Warna buah berubah, umumnya mulai dari ujung buah atau dekat tangkai, yang dengan cepat meluas ke seluruh buah. Buah menjadi busuk dalam waktu 14-22 hari. Akhirnya buah menjadi hitam',
                'solusi'=> 'Secara fisik dapat dilakukan dengan pelilinan buah dan pemangkasan bagian bawah pohon. Dan secara mekanik oleskan bubur Bordeaux Penyemprotan fungisida yang berbahan aktif maneb seperti Velimex 80 WP dengan dosis 2-2,5 gram/liter',


            ]);

            Penyakit::create([
                'namaPenyakit' => '(P-02) Bercak Daun',
                'keterangan'=> 'Bercak Daun merupakan penyakit menyerang tanaman buah terutama pada bagian daun menyebabkan fungsi fotosintesis terganggu. Apabila serangan terjadi pada fase generatif menyebabkan proses produksi buah menjadi kurang sempurna atau hampa sehingga bobot buah dan kualitas buah menjadi berkurang.',
                'solusi'=> 'Secara fisik dapat dilakukan sanitasi kebun untuk mengurangi kelembaban dan daun-daun bawah yang terinfeksi secepatnya diambil agar tidak menjadi sumber penularan. Dan secara mekanik oleskan bubur Bordeaux, Penyemprotan fungisida Masalgin 50 WP yang mengandung benomyl, dengan dosis 1-2 gram/liter serta pemberian Kuproxat 345 SC. Dosis 2 -3 ml/l dengan interval aplikasi 7 hari sekali',


                ]);

            Penyakit::create([
                'namaPenyakit' => '(P-03) Busuk Batang',
                'keterangan'=> 'Busuk Batang merupakan penyakit yang menyerang tanaman buah pada bagian batang dan menyebabkan kerusakan atau kematian pada batang yang disebabkan oleh jamur, virus atau bakteri. Penyerangan ini biasanya terjadi pada bagian batang yang terluka serta bagian lembap dan hangat. Sehingga menyebabkan rusaknya jaringan batang karena pembusukan dan menyebar ke suluruh bagian tanaman',
                'solusi'=> 'Secara fisik dapat dilakukan dengan cara mengerok kulit batang yang sakit sampai bagian yang sehat. Kerokan dibentuk oval meruncing di bagian atas dan bawah agar luka cepat tertutup kembali. Secara mekanik dilakukan dengan luka kerokan diolesi dengan fungisida, lalu ditutup dengan penutup seperti karbolinum atau difolatan 4 F 3%',


                ]);

            Penyakit::create([
                'namaPenyakit' => '(P-04) Busuk Akar',
                'keterangan'=> 'Busuk Batang merupakan penyakit yang menyerang tanaman buah pada bagian batang dan menyebabkan kerusakan atau kematian pada perakaran tanaman yang disebabkan oleh jamur, virus atau bakteri. Penyebaran penyakit busuk akar ini melalui beberapa media seperti tanah atau air yang merusak sistem perakaran tanaman. Sehingga berpengaruh pada penyerapan nutrisi air pada tanaman, lalu menyebabkan tanaman menjadi layu, daun gugur hingga kematian tanaman',
                'solusi'=> 'Secara fisik dapat dilakukan dengan membongkar/eradikasi tanaman durian yang terserang lalu dibakar dan bekas lubangnya diberi kapur. Secara mekanik melakukan penyemprotan fungisida jenis benlate 0,3% dalam dosis sesuai tertera pada kemasan atau 8 tutup botol dengan 14 liter.',

                ]);

            Penyakit::create([
                'namaPenyakit' => '(P-05) Embun Tepung',
                'keterangan'=> 'Embun Tepung merupakan penyakit yang menyerang tanaman buah pada bagian batang dan daun, penyakit ini disebabkan oleh jamur yang dibawa melalui udara dan rawan sekali tanaman yang tumbuh di lingkungan yang lembap dan suhu dingin. Penyerangan penyakit ini menyebabkan bagian bunga menguning hingga kering dan mati yang bisa mengurangi produktivitas tanaman.',
                'solusi'=> 'Secara fisik dapat dilakukan sanitasi yaitu dengan memotong cabang/ranting yang pucuk bunga dan buahnya terserang berat, membuang bunga dan buah untuk tanaman yang terserang sedang dan membersihkan bunga dan buah untuk tanaman yang terserang ringan. Secara mekanik dilakukan dengan pemberian fungisida dengan bahan aktif propiconazole dan tebuconazole dengan dosis sesuai dengan kemasan atau konsentrasi 0,2 % (2 g/liter air).',

                ]);

            Penyakit::create([
                'namaPenyakit' => '(P-06) Hawar Putih',
                'keterangan'=> 'Hawar Putih merupakan penyakit yang menyerang tanaman pada umumnya baik tanaman holtikultura maupun padi yang disebabkan oleh infeksi jamur. Tanaman yang terserang penyakit biasanya dalam kondisi stress atau tidak normal dikarenakan kelembapan yang berlebihan seperti adanya genangan air, penyakit ini dibawa melalui biji padi, air dan angin. Penyakit ini dapat menyebabkan kerugian ekonomis yang cukup drastis dan merugikan dikalangan masyarakat.',
                'solusi'=> 'Secara fisik dapat dilakukan pemangkasan cabang/ ranting yang terserang penyakit. Pangkasan harus segera dibakar pada tempat yang telah tersedia. Secara mekanik dengan melakukan penyemprotan fungisida seperti Kaptan dan Mancozeb dengan dosis 2-4 gram /liter air.',

                ]);

            Penyakit::create([
                'namaPenyakit' => '(P-07) Virus Daun',
                'keterangan'=> 'Virus Daun merupakan penyakit yang disebabkan oleh infeksi virus yang menyerang bagian daun tanaman. Penyebaran virus memiliki cukup banyak cara melalui serangga vektor, atau bisa dari alat yang digunakan oleh manusia itu sendiri seperti alat pemotong yang terkontaminasi. Penyakit virus daun ini memiliki variasi gejala, tergantung jenis vrus dan jenis tanaman yang diserangnya.',
                'solusi'=> 'Secara fisik dapat dilakukan dengan penempatan lokasi kebun minimal 5 km dari kebun jeruk yang terserang CVPD dan perhatikan sanitasi lingkungan yang baik. Secara mekanik dengan Insektisida  Supracide atau cascade',

                ]);

            Penyakit::create([
                'namaPenyakit' => '(P-08) Cendawan Tepung',
                'keterangan'=> 'Cendawan Tepung merupakan penyakit yang disebabkan oleh infeksi cendawan. Penyakit ini umumnya menyebar melalui spora yang tersebar di udara, tanaman di daerah yang lembap lebih rawan terserang penyakit ini, resiko tanaman yang terserang penyakit ini cukup berat yang mengakibatkan deformasi pada tanaman seperti kehilangan produktivitas hingga kematian tanaman.',
                'solusi'=> 'Secara fisik dapat dilakukan dengan bagian tanaman yang sakit dipotong / dimusnahkan. Secara mekanik dengan pemberian tepung belerang atau bubur kalifornia secara rutin.',

                ]);
    }
}

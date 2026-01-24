<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Untuk usia berapa kelas di Alhazen Academy?',
                'answer' => 'Kelas tersedia untuk TK hingga Dewasa. Kami membagi kurikulum per level agar nyaman untuk setiap usia.'
            ],
            [
                'question' => 'Apakah kelas dilakukan secara online atau offline?',
                'answer' => 'Keduanya tersedia. Kamu bisa pilih kelas online via Zoom/Meet atau offline di cabang terdekat.'
            ],
            [
                'question' => 'Apakah anak harus punya pengalaman coding sebelumnya?',
                'answer' => 'Tidak wajib. Untuk pemula kami mulai dari konsep dasar dan proyek seru yang ramah anak.'
            ],
            [
                'question' => 'Berapa lama durasi setiap pertemuan?',
                'answer' => 'Rata-rata 60–90 menit per sesi, tergantung program yang dipilih.'
            ],
        ];

        foreach ($faqs as $i => $f) Faq::updateOrCreate(['question'=>$f['question']], $f + ['sort_order'=>$i+1]);

    }
}

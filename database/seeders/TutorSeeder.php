<?php

namespace Database\Seeders;

use App\Models\Tutor;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cards = [
            [
                'name' => 'Aldi Afrizarman',
                'years' => 2,
                'skills' => 'Python',
                'photo' => null,
                'bg-photo' => '#FACC15',
                'gender' => 'male',
                'bio' => 'Hi! Aku Aldi - kamu bisa panggil aku bang atau kaka ya. Bareng aku, kita bakalan belajar Python dan kita akan bicara tentang website dan data. Sampai ketemu di kelas ya.',
            ],
            [
                'name' => 'Ade Nuryana',
                'years' => 2,
                'skills' => 'HTML CSS, JavaScript, PHP, Python',
                'photo' => null,
                'bg-photo' => '#059669',
                'gender' => 'male',
                'bio' => 'Hai! Aku Ade - sekarang lagi kuliah s2 di salah satu swasta di Indonesia, saya sedang mendalami ke bagian data scientist, nah data scientist saya bisa memasukan ke dalam website , bisa menggunakan Django. Nah Django merupakan salah satu framework python yang sejalan dengan data scientist karena sama sama menggunakan python',
            ],
            [
                'name' => 'Bagus Adam Farizi',
                'years' => 2,
                'skills' => 'HTML, JavaScript, PHP, SQL',
                'photo' => null,
                'bg-photo' => '#F97316',
                'gender' => 'male',
                'bio' => 'Hai! Aku Adam — tutor web kamu yang santai dan ramah. Aku suka menjelajah cara kerja dunia digital dan bikin coding jadi seru serta mudah dipahami. Yuk belajar sambil praktik, ubah ide jadi proyek beneran, dan kembangkan skill bareng-bareng. Ayo mulai petualangan ngoding!',
            ],
            [
                'name' => 'Mozadilla Sabina',
                'years' => 1,
                'skills' => 'HTML CSS, JavaScript, PHP, Python, Scratch, UI/UX Design',
                'photo' => null,
                'bg-photo' => '#FACC15',
                'gender' => 'female',
                'bio' => 'Hai! Aku Mozadilla - seorang perempuan lulusan Sistem Informasi yang passionate di dunia teknologi dan pendidikan. Bagiku, belajar dan berbagi ilmu adalah cara terbaik untuk tumbuh bersama.',
            ],
            [
                'name' => 'Fariha Ulya',
                'years' => 2,
                'skills' => 'Python, SQL, Scratch, Code.org',
                'photo' => null,
                'bg-photo' => '#059669',
                'gender' => 'female',
                'bio' => 'Halo! Aku Fariha - tutor coding mu, belajar sambil bersenang-senang. Belajar coding itu seperti kita sedang bermain game tetapi kamu tidak akan sadar kalau sebetulnya kita sedang belajar! Membuat project game lalu memainkan game buatan mu sendiri, menyenangkan bukan?',
            ],
            [
                'name' => 'Yendri Ikhlas Fernando',
                'years' => 1,
                'skills' => 'HTML CSS, PHP, Python, C++, SQL, Scratch, Blender, gdevelop',
                'photo' => null,
                'bg-photo' => '#F97316',
                'gender' => 'male',
                'bio' => 'Halo! Aku Yendir - tutor coding mu—belajar sambil bersenang-senang. Bayangin coding itu seperti main game: kita bikin misi, naik level, dan tiba-tiba… kamu jago! Aku berpengalaman sebagai web developer yang biasa ngurus WordPress, Flask, dan Django, jadi kita bisa bikin project seru dari website sampai mini-game, lalu kamu mainin karya mu sendiri.',
            ],
        ];

        $now = now();
        $rows = [];
        foreach ($cards as $i => $c) {
            $rows[] = [
                'name'        => $c['name'],
                'slug'        => Str::slug($c['name']),
                'years'       => (int) $c['years'],
                'skills'      => (string) $c['skills'],
                'photo'       => $c['photo'], // null ok
                'bg_color'    => Arr::get($c, 'bg-photo', '#FACC15'),
                'gender'      => $c['gender'] === 'female' ? 'female' : 'male',
                'bio'         => $c['bio'],
                'is_active'   => true,
                'sort_order'  => $i + 1,
                'created_at'  => $now,
                'updated_at'  => $now,
            ];
        }

        Tutor::upsert($rows, ['slug'], ['years','skills','photo','bg_color','gender','bio','is_active','sort_order','updated_at']);
    }
}

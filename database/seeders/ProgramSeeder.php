<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\ProgramInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        $tabs = [
            [
                'key'        => 'coding',
                'label'      => 'Coding',
                'icon'       => 'assets/kids/program-detail/icon-program1.png',
                'bg'         => 'bg-[#38BDF8]',
                'textColor'  => 'text-[#F9FAFB]',
                'child'      => null,
                'sub'        => 'Create with logic',
            ],
            [
                'key'        => 'animation',
                'label'      => 'Animation',
                'icon'       => 'assets/kids/program-detail/icon-program2.png',
                'bg'         => 'bg-[#F97316]',
                'textColor'  => 'text-[#F9FAFB]',
                'child'      => null,
                'sub'        => 'Bring stories to life',
            ],
            [
                'key'        => 'iot',
                'label'      => 'IoT',
                'icon'       => 'assets/kids/program-detail/icon-program3.png',
                'bg'         => 'bg-[#059669]',
                'textColor'  => 'text-[#F9FAFB]',
                'child'      => null,
                'sub'        => 'Connect the real world',
            ],
            [
                'key'        => 'roblox',
                'label'      => 'Roblox',
                'icon'       => 'assets/kids/program-detail/icon-program4.png',
                'bg'         => 'bg-[#6366F1]',
                'textColor'  => 'text-[#F9FAFB]',
                'child'      => null,
                'sub'        => 'Build your own game',
            ],
            [
                'key'        => 'design',
                'label'      => 'Design',
                'icon'       => 'assets/kids/program-detail/icon-program5.png',
                'bg'         => 'bg-[#F43F5E]',
                'textColor'  => 'text-[#F9FAFB]',
                'child'      => null,
                'sub'        => 'Create with imagination',
            ],
        ];

        $content = [
            'coding' => [
                'title'    => 'Coding',
                'subtitle' => 'Create with Logic',
                'modules'  => '50+',
                'students' => '1200',
                'desc'     =>
                    'Anak-anak belajar logika pemrograman melalui game dan proyek visual. Mereka membuat game, aplikasi sederhana, dan animasi interaktif menggunakan Scratch & Thunkable.',
                'tools'    => ['Scratch', 'Thunkable', 'MakeCode', 'EduBlocks'],
                'price'    => 'Rp. 10.000.000',
                'ctaText'  => 'Coba Kelas Coding',
                'ctaHref'  => null,
            ],

            'animation' => [
                'title'    => 'Animation',
                'subtitle' => 'Bring Stories to Life',
                'modules'  => '40+',
                'students' => '800',
                'desc'     =>
                    'Mulai dari storyboard, keyframe, hingga render sederhana. Siswa membuat animasi karakter dan bumper video yang seru dan kreatif.',
                'tools'    => ['Blender', 'Krita', 'OpenToonz', 'Canva'],
                'price'    => 'Rp. 9.000.000',
                'ctaText'  => 'Coba Kelas Animasi',
                'ctaHref'  => null,
            ],

            'iot' => [
                'title'    => 'IoT',
                'subtitle' => 'Connect the Real World',
                'modules'  => '35+',
                'students' => '600',
                'desc'     =>
                    'Belajar sensor, aktuator, dan otomasi sederhana lewat simulasi. Buat proyek smart home mini dan kirim data ke dashboard.',
                'tools'    => ['Wokwi', 'Tinkercad Circuits', 'MQTT', 'Blynk'],
                'price'    => 'Rp. 9.500.000',
                'ctaText'  => 'Coba Kelas IoT',
                'ctaHref'  => null,
            ],

            'roblox' => [
                'title'    => 'Roblox',
                'subtitle' => 'Build Your Own World',
                'modules'  => '30+',
                'students' => '700',
                'desc'     =>
                    'Rancang world, obstacle, dan mini-game kolaboratif sambil mengenal scripting dasar di Roblox Studio.',
                'tools'    => ['Roblox Studio', 'Lua Basics', 'Asset Manager'],
                'price'    => 'Rp. 8.500.000',
                'ctaText'  => 'Coba Kelas Roblox',
                'ctaHref'  => null,
            ],

            'design' => [
                'title'    => 'Design',
                'subtitle' => 'Create with Imagination',
                'modules'  => '45+',
                'students' => '950',
                'desc'     =>
                    'Belajar poster, ikon, dan UI mini. Kenal warna, tipografi, dan layout yang ramah pemula untuk karya yang rapi dan menarik.',
                'tools'    => ['Figma', 'Canva', 'Photopea', 'Color Hunt'],
                'price'    => 'Rp. 9.000.000',
                'ctaText'  => 'Coba Kelas Desain',
                'ctaHref'  => null,
            ],
        ];

        foreach ($tabs as $index => $tab) {
            $key = $tab['key'];

            // Pastikan ada konten yang cocok
            if (! isset($content[$key])) {
                continue;
            }

            $c = $content[$key];

            // 1) Buat Program (data inti)
            $program = Program::updateOrCreate(
                ['key' => $key],
                [
                    'name'      => $tab['label'],
                    'slug'      => Str::slug($tab['label'] . '-kids'),
                    'is_active' => true,
                    'is_home'   => true, // default: semua muncul di home; bisa kamu ubah manual di Filament
                    'is_trial'  => true, // default: semua bisa dipilih trial; bisa kamu ubah manual di Filament
                    'sort_order'=> $index + 1,
                ]
            );

            // 2) Buat / update ProgramInfo (konten + tampilan landing)
            ProgramInfo::updateOrCreate(
                [
                    'program_id' => $program->id,
                    'context'    => 'kids_landing',
                ],
                [
                    'title'          => $c['title'],
                    'subtitle'       => $c['subtitle'],
                    'short_tagline'  => $tab['sub'],

                    'modules_label'  => $c['modules'],
                    'students_label' => $c['students'],
                    'description'    => $c['desc'],

                    'tools'          => $c['tools'],

                    'price_label'    => $c['price'],
                    'cta_text'       => $c['ctaText'],
                    'cta_href'       => $c['ctaHref'],

                    'icon_path'       => $tab['icon'],
                    'child_image_path'=> $tab['child'],
                    'bg_class'        => $tab['bg'],
                    'text_color_class'=> $tab['textColor'],
                ]
            );
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::updateOrCreate(
            ['key' => 'company_profile'],
            [
                'settings' => [
                    // Info dasar
                    'company_name'  => 'Alhazen Academy',
                    'tagline'       => 'Build the Future, One Code at a Time!',
                    
                    // Kontak utama
                    'whatsapp'      => '+62-813-90000-332',
                    'email'         => 'info@alhazen.academy',
                    'website'       => 'www.alhazen.academy',

                    // Alamat & peta
                    'address'       => 'Plaza Kaha, Jl. KH Abdullah Syafei No.21 C, Bukit Duri, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12840',
                    'map_embed'     => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2950397039335!2d106.85549089999999!3d-6.2247745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ae3f3cba0d1cdbb%3A0xd971366e80cf58ca!2sAlhazen%20Academy%20-%20Kursus%20Coding%20dan%20Animasi!5e0!3m2!1sen!2sid!4v1760929596637!5m2!1sen!2sid',

                    // Social media dinamis (bisa tambah / kurang sewaktu-waktu)
                    'socials' => [
                        [
                            'platform'   => 'facebook',
                            'label'      => 'Facebook',
                            'handle'     => 'Alhazen Academy ',
                            'href'        => 'https://www.facebook.com/alhazenacademy',
                            'icon_path'  => 'assets/kids/index-footer/icon-fb.png', // untuk footer
                            'is_active'  => true,
                            'sort_order' => 1,
                        ],
                        [
                            'platform'   => 'instagram',
                            'label'      => 'Instagram',
                            'handle'     => 'alhazenacademy',
                            'href'        => 'https://instagram.com/alhazenacademy',
                            'icon_path'  => 'assets/kids/index-footer/icon-ig.png', // untuk footer
                            'is_active'  => true,
                            'sort_order' => 2,
                        ],
                        [
                            'platform'   => 'tiktok',
                            'label'      => 'TikTok',
                            'handle'     => '@alhazenacademy',
                            'href'        => 'https://www.tiktok.com/@alhazenacademy',
                            'icon_path'  => 'assets/kids/index-footer/icon-tkt.png',
                            'is_active'  => true,
                            'sort_order' => 3,
                        ],
                        [
                            'platform'   => 'linkedin',
                            'label'      => 'LinkedIn',
                            'handle'     => 'Alhazen Academy',
                            'href'        => 'https://www.linkedin.com/company/alhazen-academy',
                            'icon_path'  => 'assets/kids/index-footer/icon-lkn.png',
                            'is_active'  => true,
                            'sort_order' => 4,
                        ],
                        [
                            'platform'   => 'youtube',
                            'label'      => 'YouTube',
                            'handle'     => 'Alhazen Academy',
                            'href'        => 'https://www.youtube.com/@alhazenacademy',
                            'icon_path'  => 'assets/kids/index-footer/icon-ytb.png',
                            'is_active'  => true,
                            'sort_order' => 5,
                        ]
                    ],
                ],
            ]
        );
    }
}

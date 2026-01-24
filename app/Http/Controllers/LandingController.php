<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Tutor;
use App\Models\Article;
use App\Models\Program;
use App\Models\SalesNumber;
use App\Models\SiteSetting;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LandingController extends Controller
{
    public function index()
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        // Section Tutors
        $tutors = Tutor::active()->ordered()->get();
        $cards = $tutors->map(function (Tutor $t) {
            return [
                'name' => $t->name,
                'years' => $t->years,
                'skills' => is_array($t->skills) ? implode(', ', $t->skills) : (string) $t->skills,
                'photo' => $t->photo_url,     // accessor di model (fallback male/female jika null)
                'bg-photo' => $t->bg_color_safe, // accessor di model (default aman k$s['img']alau null)
                'gender' => $t->gender,        // 'male' | 'female'
                'bio' => $t->bio,
            ];
        })->all();

        // Section Footer
        $settings = SiteSetting::companySettings();
        $whatsapp = $settings['whatsapp'] ?? null;
        $email = $settings['email'] ?? null;
        $website = $settings['website'] ?? null;
        $address = $settings['address'] ?? null;
        $socials = collect($settings['socials'] ?? [])
            ->where('is_active', true)
            ->sortBy('sort_order');
        $programLinks = Program::active()
            ->ordered()
            ->get()
            ->map(function (Program $program) {
                return [
                    'label' => $program->name,
                    'url' => match (strtolower($program->name)) {
                        'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                        'roblox', 'roblox studio' => 'kursus-roblox',
                        default => 'program',
                    },      // nama route: route('program', ['tab' => key])
                    'key' => $program->key,  // dipakai sebagai tab
                ];
            })
            ->all();

        // Section Articles
        $featured = Article::featureArticle()->first();
        $latestArticle = Article::published()
            ->when($featured, fn($q) => $q->where('id', '!=', $featured->id))
            ->latest('published_at')
            ->take(4)
            ->get();
        
        // Section FAQ
        $faqs = Faq::active()->ordered()->get();
        
        // Section Program Cards
        $programCards = Program::query()
            ->with([
                'info' => function ($q) {
                    $q->where('context', 'kids_landing');
                }
            ])
            ->active()   // scopeActive()
            ->home()     // scopeHome()
            ->ordered()  // scopeOrdered()
            ->get()
            ->map(function (Program $program) {
                $info = $program->info;

                return [
                    'bg' => $info->bg_class ?? 'bg-[#E5E7EB]',
                    'text-color' => $info->text_color_class ?? 'text-[#0F172A]',
                    'child' => $info
                        ? $info->child_image_url   // accessor
                        : asset('assets/kids/program-detail/anak.webp'),
                    'icon' => $info && $info->icon_path
                        ? asset($info->icon_path)
                        : null,
                    'title' => $info->title ?? $program->name,
                    'sub' => $info->short_tagline
                        ?? $info->subtitle
                        ?? '',

                    // URL berdasarkan nama program
                    'url' => match (strtolower($program->name)) {
                        'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                        'roblox', 'roblox studio' => 'kursus-roblox',
                        default => 'program',
                    },
                ];
            })
            ->values()
            ->toArray();
        // Tambah 1 kartu "View All" manual (seperti di hardcoded-mu)
        $programCards[] = [
            'bg' => 'bg-[#E5E7EB]',
            'text-color' => 'text-[#0F172A]',
            'child' => asset('assets/kids/program-detail/anak.webp'),
            'icon' => asset('assets/kids/program-detail/icon-program6.png'),
            'title' => 'View All',
            'sub' => 'Explore all our courses',
            'url' => 'program' // ganti sesuai route index
        ];

        return view('pages.index', compact('salesPhone', 'cards', 'whatsapp', 'email', 'address', 'website', 'socials', 'featured', 'latestArticle', 'faqs', 'programCards', 'programLinks'));
    }

    public function program()
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        // Section Tutors
        $tutors = Tutor::active()->ordered()->get();
        $cards = $tutors->map(function (Tutor $t) {
            return [
                'name' => $t->name,
                'years' => $t->years,
                'skills' => is_array($t->skills) ? implode(', ', $t->skills) : (string) $t->skills,
                'photo' => $t->photo_url,     // accessor di model (fallback male/female jika null)
                'bg-photo' => $t->bg_color_safe, // accessor di model (default aman kalau null)
                'gender' => $t->gender,        // 'male' | 'female'
                'bio' => $t->bio,
            ];
        })->all();

        // Section Footer
        $settings = SiteSetting::companySettings();
        $whatsapp = $settings['whatsapp'] ?? null;
        $email = $settings['email'] ?? null;
        $website = $settings['website'] ?? null;
        $address = $settings['address'] ?? null;
        $socials = collect($settings['socials'] ?? [])
            ->where('is_active', true)
            ->sortBy('sort_order');
        $programLinks = Program::active()
            ->ordered()
            ->get()
            ->map(function (Program $program) {
                return [
                    'label' => $program->name,
                    'url' => match (strtolower($program->name)) {
                        'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                        'roblox', 'roblox studio' => 'kursus-roblox',
                        default => 'program',
                    },      // nama route: route('program', ['tab' => key])
                    'key' => $program->key,  // dipakai sebagai tab
                ];
            })
            ->all();
        
        // Section FAQ
        $faqs = Faq::active()->ordered()->get();
        
        // Section Program Tabs & Content
        $programs = Program::query()
            ->with([
                'info' => function ($q) {
                    $q->where('context', 'kids_landing');
                }
            ])
            ->active()   // scopeActive()
            ->lainnya()  // scopeLainnya()
            ->ordered()  // scopeOrdered()
            ->get();
        // === Gantikan $tabs ===
        $tabs = $programs->map(function (Program $program) {
            $info = $program->info;
            return [
                'key' => $program->key,
                'label' => $info->title ?? $program->name,
                'icon' => $info && $info->icon_path
                    ? asset($info->icon_path)
                    : null,
                'bg' => $info->bg_class ?? 'bg-[#E5E7EB]',
                'textColor' => $info->text_color_class ?? 'text-[#0F172A]',
                'child' => $info
                    ? $info->child_image_url   // <-- ini pakai accessor
                    : asset('assets/kids/program-detail/anak.webp'),
                'sub' => $info->short_tagline
                    ?? $info->subtitle
                    ?? '',
            ];
        })->values()->toArray();
        // === Gantikan $content ===
        $content = $programs->mapWithKeys(function (Program $program) {
            $info = $program->info;
            return [
                $program->key => [
                    'title' => $info->title ?? $program->name,
                    'subtitle' => $info->subtitle ?? '',
                    'modules' => $info->modules_label ?? '',
                    'students' => $info->students_label ?? '',
                    'desc' => $info->description ?? '',
                    'tools' => $info->tools ?? [],         // dicast array di model
                    'price' => $info->price_label ?? '',
                    'ctaText' => $info->cta_text ?? '',
                    'ctaHref' => $info->cta_href,            // boleh null
                ],
            ];
        })->toArray();

        return view('pages.program', compact('salesPhone', 'cards', 'whatsapp', 'email', 'address', 'website', 'socials', 'faqs', 'tabs', 'content', 'programLinks'));
    }

    public function event()
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        return view('pages.event', compact('salesPhone'));
    }

    public function about()
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        // Section Map Embed
        $settings = SiteSetting::companySettings();
        $mapembed = $settings['map_embed'] ?? null;

        // Section Footer
        $whatsapp = $settings['whatsapp'] ?? null;
        $email = $settings['email'] ?? null;
        $website = $settings['website'] ?? null;
        $address = $settings['address'] ?? null;
        $socials = collect($settings['socials'] ?? [])
            ->where('is_active', true)
            ->sortBy('sort_order');
        $programLinks = Program::active()
            ->ordered()
            ->get()
            ->map(function (Program $program) {
                return [
                    'label' => $program->name,
                    'url' => match (strtolower($program->name)) {
                        'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                        'roblox', 'roblox studio' => 'kursus-roblox',
                        default => 'program',
                    },      // nama route: route('program', ['tab' => key])
                    'key' => $program->key,  // dipakai sebagai tab
                ];
            })
            ->all();
        
        // Section FAQ
        $faqs = Faq::active()->ordered()->get();

        return view('pages.about', compact('mapembed', 'whatsapp', 'email', 'address', 'website', 'socials', 'faqs', 'programLinks', 'salesPhone'));
    }

    public function article()
    {
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        // Section Article Categories
        $categories = Category::select('name', 'slug')
            ->orderBy('name')
            ->get()
            ->map(fn ($c) => [
                'label' => $c->name,
                'href'  => route('category.show', $c->slug),
                'active'=> false,
            ])
            ->values()
            ->toArray();

        array_unshift($categories, [
            'label' => 'All',
            'href'  => route('artikel'),
            'active'=> true,
        ]);
        
        $posts = Article::published()
        ->latest('published_at')
        ->get()
        ->map(fn (Article $a) => [
            'title'   => $a->title,
            'slug'    => $a->slug,
            'date'    => optional($a->published_at)->translatedFormat('F d, Y'),
            'image'   => $a->cover_image_url,
            'url'     => route('artikel.show', $a->slug),
            'excerpt' => Str::words(strip_tags($a->content ?? ''), 25, ' [...]'),
        ])
        ->toArray();

        // Section Footer
        $settings = SiteSetting::companySettings();
        $whatsapp = $settings['whatsapp'] ?? null;
        $email = $settings['email'] ?? null;
        $website = $settings['website'] ?? null;
        $address = $settings['address'] ?? null;
        $socials = collect($settings['socials'] ?? [])
            ->where('is_active', true)
            ->sortBy('sort_order');
        $programLinks = Program::active()
            ->ordered()
            ->get()
            ->map(function (Program $program) {
                return [
                    'label' => $program->name,
                    'url' => match (strtolower($program->name)) {
                        'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                        'roblox', 'roblox studio' => 'kursus-roblox',
                        default => 'program',
                    },
                    'key' => $program->key,
                ];
            })
            ->all();
        
        // Section FAQ
        $faqs = Faq::active()->ordered()->get();

        return view('pages.artikel', compact('salesPhone', 'categories', 'posts', 'whatsapp', 'email', 'address', 'website', 'socials', 'faqs', 'programLinks'));
    }

    public function articleShow(Request $request, string $slug)
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        // Section Article Detail
        $article = Article::query()
            ->with([
                'author:id,name,profile_photo_path',
                'category:id,name,slug',
            ])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->firstOrFail();
        $related = Article::query()
            ->published()
            ->where('category_id', $article->category_id)
            ->whereKeyNot($article->getKey())
            ->latest('published_at')
            ->take(6)
            ->get(['title', 'slug', 'cover_image', 'published_at', 'content'])
            ->map(function (Article $a) {
                $image = $a->cover_image_url;

                return [
                    'title' => $a->title,
                    'slug' => $a->slug,
                    'date' => $a->published_at_formatted,
                    'image' => $image,
                    'url' => route('artikel.show', $a->slug),
                    'excerpt' => Str::words(strip_tags($a->content ?? ''), 25, ' [...]'),
                ];
            })
            ->toArray();
        $coverPath = $article->cover_image_url;
        if ($coverPath) {
            if (Str::startsWith($coverPath, ['http://', 'https://'])) {
                $ogImage = $coverPath;
            } else {
                $ogImage = url($coverPath);
            }
        } else {
            $ogImage = asset('assets/nav-logo.webp');
        }

        // Section Footer
        $settings = SiteSetting::companySettings();
        $whatsapp = $settings['whatsapp'] ?? null;
        $email = $settings['email'] ?? null;
        $website = $settings['website'] ?? null;
        $address = $settings['address'] ?? null;
        $socials = collect($settings['socials'] ?? [])
            ->where('is_active', true)
            ->sortBy('sort_order');
        $programLinks = Program::active()
            ->ordered()
            ->get()
            ->map(function (Program $program) {
                return [
                    'label' => $program->name,
                    'url' => match (strtolower($program->name)) {
                        'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                        'roblox', 'roblox studio' => 'kursus-roblox',
                        default => 'program',
                    },
                    'key' => $program->key,
                ];
            })
            ->all();

        return view('pages.artikel.show', compact('salesPhone', 'article', 'related', 'whatsapp', 'email', 'address', 'website', 'socials', 'programLinks', 'ogImage'));

    }

    public function katalog()
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        // Section Footer
        $settings = SiteSetting::companySettings();
        $whatsapp = $settings['whatsapp'] ?? null;
        $email = $settings['email'] ?? null;
        $website = $settings['website'] ?? null;
        $address = $settings['address'] ?? null;
        $socials = collect($settings['socials'] ?? [])
            ->where('is_active', true)
            ->sortBy('sort_order');
        $programLinks = Program::active()
            ->ordered()
            ->get()
            ->map(function (Program $program) {
                return [
                    'label' => $program->name,
                    'url' => match (strtolower($program->name)) {
                        'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                        'roblox', 'roblox studio' => 'kursus-roblox',
                        default => 'program',
                    },      // nama route: route('program', ['tab' => key])
                    'key' => $program->key,  // dipakai sebagai tab
                ];
            })
            ->all();
        
        // Section FAQ
        $faqs = Faq::active()->ordered()->get();

        return view('pages.katalog', compact('whatsapp', 'email', 'address', 'website', 'socials', 'faqs', 'programLinks', 'salesPhone'));
    }

    public function kursus_coding_anak()
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        // Section Tutors
        $tutors = Tutor::active()->ordered()->get();
        $cards = $tutors->map(function (Tutor $t) {
            return [
                'name' => $t->name,
                'years' => $t->years,
                'skills' => is_array($t->skills) ? implode(', ', $t->skills) : (string) $t->skills,
                'photo' => $t->photo_url,     // accessor di model (fallback male/female jika null)
                'bg-photo' => $t->bg_color_safe, // accessor di model (default aman kalau null)
                'gender' => $t->gender,        // 'male' | 'female'
                'bio' => $t->bio,
            ];
        })->all();

        // Section Footer
        $settings = SiteSetting::companySettings();
        $whatsapp = $settings['whatsapp'] ?? null;
        $email = $settings['email'] ?? null;
        $website = $settings['website'] ?? null;
        $address = $settings['address'] ?? null;
        $socials = collect($settings['socials'] ?? [])
            ->where('is_active', true)
            ->sortBy('sort_order');
        $programLinks = Program::active()
            ->ordered()
            ->get()
            ->map(function (Program $program) {
                return [
                    'label' => $program->name,
                    'url' => match (strtolower($program->name)) {
                        'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                        'roblox', 'roblox studio' => 'kursus-roblox',
                        default => 'program',
                    },      // nama route: route('program', ['tab' => key])
                    'key' => $program->key,  // dipakai sebagai tab
                ];
            })
            ->all();

        // Section FAQ
        $faqs = Faq::active()->ordered()->get();

        return view('pages.program.kursus_coding_anak', compact('salesPhone', 'cards', 'whatsapp', 'email', 'address', 'website', 'socials', 'faqs', 'programLinks'));
    }

    public function kursus_roblox()
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        // Section Tutors
        $tutors = Tutor::active()->ordered()->get();
        $cards = $tutors->map(function (Tutor $t) {
            return [
                'name' => $t->name,
                'years' => $t->years,
                'skills' => is_array($t->skills) ? implode(', ', $t->skills) : (string) $t->skills,
                'photo' => $t->photo_url,     // accessor di model (fallback male/female jika null)
                'bg-photo' => $t->bg_color_safe, // accessor di model (default aman kalau null)
                'gender' => $t->gender,        // 'male' | 'female'
                'bio' => $t->bio,
            ];
        })->all();

        // Section Footer
        $settings = SiteSetting::companySettings();
        $whatsapp = $settings['whatsapp'] ?? null;
        $email = $settings['email'] ?? null;
        $website = $settings['website'] ?? null;
        $address = $settings['address'] ?? null;
        $socials = collect($settings['socials'] ?? [])
            ->where('is_active', true)
            ->sortBy('sort_order');
        $programLinks = Program::active()
            ->ordered()
            ->get()
            ->map(function (Program $program) {
                return [
                    'label' => $program->name,
                    'url' => match (strtolower($program->name)) {
                        'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                        'roblox', 'roblox studio' => 'kursus-roblox',
                        default => 'program',
                    },      // nama route: route('program', ['tab' => key])
                    'key' => $program->key,  // dipakai sebagai tab
                ];
            })
            ->all();

        // Section FAQ
        $faqs = Faq::active()->ordered()->get();

        return view('pages.program.kursus_roblox', compact('salesPhone', 'cards', 'whatsapp', 'email', 'address', 'website', 'socials', 'faqs', 'programLinks'));
    }

    public function category(string $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        // Sidebar kategori
        $categories = Category::select('name', 'slug')
            ->orderBy('name')
            ->get()
            ->map(fn ($c) => [
                'label'  => $c->name,
                'href'   => route('category.show', $c->slug),
                'active' => $c->slug === $slug,
            ])
            ->values()
            ->toArray();

        array_unshift($categories, [
            'label'  => 'All',
            'href'   => route('artikel'),
            'active' => false,
        ]);


        // Artikel per kategori
        $posts = Article::published()
            ->where('category_id', $category->id)
            ->latest('published_at')
            ->get()
            ->map(fn ($a) => [
                'title'   => $a->title,
                'slug'    => $a->slug,
                'date'    => optional($a->published_at)->translatedFormat('F d, Y'),
                'image'   => $a->cover_image_url,
                'excerpt' => Str::words(strip_tags($a->content ?? ''), 25, '...'),
            ])
            ->toArray();
        
        // Section Footer
        $settings = SiteSetting::companySettings();
        $whatsapp = $settings['whatsapp'] ?? null;
        $email = $settings['email'] ?? null;
        $website = $settings['website'] ?? null;
        $address = $settings['address'] ?? null;
        $socials = collect($settings['socials'] ?? [])
            ->where('is_active', true)
            ->sortBy('sort_order');
        $programLinks = Program::active()
            ->ordered()
            ->get()
            ->map(function (Program $program) {
                return [
                    'label' => $program->name,
                    'url' => match (strtolower($program->name)) {
                        'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                        'roblox', 'roblox studio' => 'kursus-roblox',
                        default => 'program',
                    },
                    'key' => $program->key,
                ];
            })
            ->all();
        
        // Section FAQ
        $faqs = Faq::active()->ordered()->get();

        return view('pages.artikel', [
            'posts'      => $posts,
            'categories' => $categories,
            'catTitle'   => 'Kategori',
            'title'      => $category->name,
            'description'=> $category->description,
            'salesPhone' => $salesPhone,
            'socials' => $socials,
            'faqs' => $faqs,
            'programLinks' => $programLinks,
            'website' => $website,
            'address' => $address,
            'whatsapp' => $whatsapp,
            'email' => $email,
        ]);
    }

    public function holiday_program()
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        // Section Tutors
        $tutors = Tutor::active()->ordered()->get();
        $cards = $tutors->map(function (Tutor $t) {
            return [
                'name' => $t->name,
                'years' => $t->years,
                'skills' => is_array($t->skills) ? implode(', ', $t->skills) : (string) $t->skills,
                'photo' => $t->photo_url,     // accessor di model (fallback male/female jika null)
                'bg-photo' => $t->bg_color_safe, // accessor di model (default aman kalau null)
                'gender' => $t->gender,        // 'male' | 'female'
                'bio' => $t->bio,
            ];
        })->all();

        // Section Footer
        $settings = SiteSetting::companySettings();
        $whatsapp = $settings['whatsapp'] ?? null;
        $email = $settings['email'] ?? null;
        $website = $settings['website'] ?? null;
        $address = $settings['address'] ?? null;
        $socials = collect($settings['socials'] ?? [])
            ->where('is_active', true)
            ->sortBy('sort_order');
        $programLinks = Program::active()
            ->ordered()
            ->get()
            ->map(function (Program $program) {
                return [
                    'label' => $program->name,
                    'url' => match (strtolower($program->name)) {
                        'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                        'roblox', 'roblox studio' => 'kursus-roblox',
                        default => 'program',
                    },      // nama route: route('program', ['tab' => key])
                    'key' => $program->key,  // dipakai sebagai tab
                ];
            })
            ->all();

        // Section FAQ
        $faqs = Faq::active()->ordered()->get();

        return view('pages.event.holiday_program', compact('salesPhone', 'cards', 'whatsapp', 'email', 'address', 'website', 'socials', 'faqs', 'programLinks'));
    }

    public function kursus_blender()
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        return view('pages.program.kursus_blender', compact('salesPhone'));
    }

    public function kursus_python()
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        return view('pages.program.kursus_python', compact('salesPhone'));
    }

    public function kursus_php()
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        return view('pages.program.kursus_php', compact('salesPhone'));
    }

    public function lokasi()
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        return view('pages.lokasi', compact('salesPhone'));
    }

    public function alhazen_hackathon()
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        return view('pages.event.alhazen_hackathon', compact('salesPhone'));
    }

    public function goes_to_school()
    {   
        // CTA Sales Phone
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;

        return view('pages.goes_to_school', compact('salesPhone'));
    }

}

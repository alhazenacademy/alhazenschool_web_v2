<?php

namespace App\Http\Controllers;

use App\Models\Faq;
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
        $salesPhone = "081234567890";

        return view('pages.index', compact('salesPhone'));
    }

    public function program()
    {
        $salesPhone = "081234567890";

        return view('pages.program', compact('salesPhone'));
    }

    public function about()
    {   
        $salesPhone = "081234567890";

        return view('pages.about', compact('salesPhone'));
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

    public function admission()
    {   
        $salesPhone = "081234567890";

        return view('pages.admission', compact('salesPhone'));
    }

    public function primary_school_full_online_group()
    {   
        $salesPhone = "081234567890";

        return view('pages.primary-school.full-online-group-learning', compact('salesPhone'));
    }

    public function primary_school_hybrid_group()
    {   
        $salesPhone = "081234567890";

        return view('pages.primary-school.hybrid-group-learning', compact('salesPhone'));
    }

    public function primary_school_guided_self()
    {   
        $salesPhone = "081234567890";

        return view('pages.primary-school.guided-self-learning', compact('salesPhone'));
    }

}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Tags\Url;
use App\Models\Article;
use App\Models\Category;
use App\Models\Program;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = '✅ Generate sitemap index and child sitemaps for pages, posts, and categories';

    public function handle()
    {
        /**
         * ======================
         * 1️⃣ SITEMAP PAGES
         * ======================
         */
        $pagesSitemap = Sitemap::create();

        collect(Route::getRoutes())
            ->filter(function ($route) {

                $uri  = $route->uri();
                $name = $route->getName();

                $excludedPrefixes = [
                    'login',
                    'logout',
                    'register',
                    'password',
                    'admin',
                    'dashboard',
                    'filament',
                    'nova',
                    'telescope',
                    'horizon',
                    'api',
                ];

                foreach ($excludedPrefixes as $prefix) {
                    if (str_starts_with($uri, $prefix)) {
                        return false;
                    }
                }

                return in_array('GET', $route->methods())
                    && $name
                    && !str_contains($uri, '{')
                    && !str_starts_with($uri, '_')
                    && !str_contains($uri, 'trial');
            })
            ->each(function ($route) use ($pagesSitemap) {

                $pagesSitemap->add(
                    Url::create(route($route->getName()))
                        ->setLastModificationDate(now())
                );
            });

        /**
         * PROGRAM / KURSUS
         */
        Program::where('is_active', true)->each(function ($program) use ($pagesSitemap) {

            $url = match (strtolower($program->name)) {
                'coding' => url('/kursus-coding-anak'),
                'roblox' => url('/kursus-roblox'),
                default => url('/program/' . $program->slug),
            };

            $pagesSitemap->add(
                Url::create($url)
                    ->setLastModificationDate($program->updated_at)
            );
        });

        $pagesSitemap->writeToFile(public_path('sitemap-pages.xml'));

        /**
         * ======================
         * 2️⃣ SITEMAP POSTS (ARTIKEL)
         * ======================
         */
        $postsSitemap = Sitemap::create();

        Article::where('status', 'published')->each(function ($article) use ($postsSitemap) {

            $postsSitemap->add(
                Url::create(route('artikel.show', $article->slug))
                    ->setLastModificationDate($article->updated_at)
            );
        });

        $postsSitemap->writeToFile(public_path('sitemap-posts.xml'));

        /**
         * ======================
         * 3️⃣ SITEMAP CATEGORIES
         * ======================
         */
        $categoriesSitemap = Sitemap::create();

        Category::each(function ($category) use ($categoriesSitemap) {

            $categoriesSitemap->add(
                Url::create(route('category.show', $category->slug))
                    ->setLastModificationDate($category->updated_at ?? now())
            );
        });

        $categoriesSitemap->writeToFile(public_path('sitemap-categories.xml'));

        /**
         * ======================
         * 4️⃣ SITEMAP INDEX
         * ======================
         */
        SitemapIndex::create()
            ->add(url('/sitemap-pages.xml'))
            ->add(url('/sitemap-posts.xml'))
            ->add(url('/sitemap-categories.xml'))
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap index & child sitemaps berhasil dibuat!');
    }
}

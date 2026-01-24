<?php

namespace App\Filament\Resources\Articles\Pages;

use App\Filament\Resources\Articles\ArticleResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;
      protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (empty($data['user_id']) && auth()->check()) {
            $data['user_id'] = auth()->id();
        }

        if (($data['status'] ?? null) === 'published' && blank($data['published_at'] ?? null)) {
            $data['published_at'] = now();
        }

        if (blank($data['reading_time'] ?? null) && !blank($data['content'] ?? null)) {
            $data['reading_time'] = $this->estimateReadingMinutes($data['content']);
        }

        return $data;
    }


    protected function estimateReadingMinutes(string $content): int
    {
        $text = strip_tags($content);

        $text = preg_replace('/[`*_>#\-\[\]\(\)!]/', ' ', $text);

        $words = str_word_count(trim($text));
        return max(1, (int) ceil($words / 200));
    }
    
}

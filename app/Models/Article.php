<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id','title','slug','excerpt','content','cover_image',
        'status','published_at','reading_time','views','meta_title',
        'meta_description','is_featured', 'author_info'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_featured'  => 'boolean',
    ];

    // Relasi penulis
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Scope: hanya artikel publish
    public function scopePublished(Builder $q): Builder
    {
        return $q->where('status', 'published')
                 ->whereNotNull('published_at')
                 ->where('published_at', '<=', now());
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFeatureArticle($query)
    {
        return $query->published()
            ->where('is_featured', true)
            ->latest('published_at');
    }

    protected function publishedAtFormatted(): Attribute
    {
        return Attribute::get(function () {
            return $this->published_at
                ? $this->published_at->format('F j, Y')
                : null;
        });
    }

    public function getCoverImageUrlAttribute(): ?string
    {
        if (! $this->cover_image) {
            return null;
        }

        return Storage::url($this->cover_image);
    }

    public function getUrlAttribute(): string
    {
        return route('artikel.show', $this->slug);
    }

    public function getPreviewAttribute(): string
    {
        return Str::words(strip_tags($this->content ?? ''), 25, ' [...]');
    }
}

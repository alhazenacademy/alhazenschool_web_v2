<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\MarkdownEditor;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Utilities\Get;
use Illuminate\Support\Str;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // 📌 ARTIKEL & STATUS
                Section::make('Artikel & Status')
                    ->description('Pengaturan penulis, status, dan kategori artikel.')
                    ->columns(3)
                    ->columnSpan('full')
                    ->schema([
                        Select::make('user_id')
                            ->label('Author')
                            ->relationship(
                                name: 'author',
                                titleAttribute: 'name',
                                modifyQueryUsing: function (Builder $query) {
                                    $user = auth()->user();

                                    if ($user->hasAnyRole(['super_admin', 'admin'])) {
                                        return $query;
                                    }

                                    return $query->where('id', $user->id);
                                },
                            )
                            ->searchable()
                            ->preload()
                            ->default(fn() => auth()->id())
                            ->required(),

                        TextInput::make('author_info')
                            ->label('Author Information')
                            ->default('Penulis di Alhazen Academy'),

                        DateTimePicker::make('published_at')
                            ->label('Published At'),

                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'draft' => 'Draft',
                                'scheduled' => 'Scheduled',
                                'published' => 'Published',
                                'archived' => 'Archived',
                            ])
                            ->default('draft')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Select::make('category_id')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Toggle::make('is_featured')
                            ->label('Article Featured')
                            ->helperText('Artikel unggulan yang akan muncul di Home Page')
                            ->default(false),
                    ]),

                // ✍️ KONTEN ARTIKEL
                Section::make('Konten Artikel')
                    ->description('Judul, cover, dan isi utama artikel.')
                    ->columns(1)
                    ->columnSpan('full')
                    ->schema([
                    TextInput::make('title')
                        ->label('Title')
                        ->required()
                        ->live(onBlur: true)
                        ->live(debounce: 500)
                        ->afterStateUpdated(function (?string $state, Set $set, Get $get) {
                            if (blank($state)) {
                                return;
                            }

                            if (blank($get('slug'))) {
                                $set('slug', Str::slug($state));
                            }
                        })
                        ->columnSpanFull(),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->dehydrateStateUsing(fn ($state) => Str::slug($state))
                            ->columnSpanFull(),

                        FileUpload::make('cover_image')
                            ->label('Cover Image')
                            ->disk('public')
                            ->directory('articles/covers')
                            ->image()
                            ->columnSpanFull(),

                        TinyEditor::make('content')
                            ->label('Content')
                            ->profile('default')
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsVisibility('public')
                            ->fileAttachmentsDirectory('articles/body')
                            ->resize('both')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                // 🔍 SEO
                Section::make('SEO')
                    ->description('Meta title dan meta description untuk kebutuhan SEO.')
                    ->columns(2)
                    ->columnSpan('full')
                    ->schema([
                        Textarea::make('meta_title')
                            ->label('Meta Title'),

                        Textarea::make('meta_description')
                            ->label('Meta Description'),
                    ]),
            ]);

    }
}

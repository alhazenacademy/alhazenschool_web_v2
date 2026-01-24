<?php

namespace App\Filament\Resources\Programs\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\TernaryFilter;

class ProgramsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('info.icon_path')
                    ->label('Icon')
                    ->disk('public_assets')
                    ->size(48),
                    
                TextColumn::make('name')
                    ->label('Nama Program')
                    ->searchable()
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),

                IconColumn::make('is_home')
                    ->label('Home')
                    ->boolean(),

                IconColumn::make('is_lainnya')
                    ->label('Lainnya')
                    ->boolean(),

                IconColumn::make('is_trial')
                    ->label('Trial')
                    ->boolean(),

                TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable(),

                TextColumn::make('info.title')
                    ->label('Judul Landing')
                    ->limit(30)
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TernaryFilter::make('is_active')
                    ->label('Status Aktif'),

                TernaryFilter::make('is_home')
                    ->label('Status Home'),

                TernaryFilter::make('is_trial')
                    ->label('Status Trial'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order');
    }
}

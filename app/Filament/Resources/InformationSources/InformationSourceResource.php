<?php

namespace App\Filament\Resources\InformationSources;

use App\Filament\Resources\InformationSources\Pages\CreateInformationSource;
use App\Filament\Resources\InformationSources\Pages\EditInformationSource;
use App\Filament\Resources\InformationSources\Pages\ListInformationSources;
use App\Filament\Resources\InformationSources\Schemas\InformationSourceForm;
use App\Filament\Resources\InformationSources\Tables\InformationSourcesTable;
use App\Models\InformationSource;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

use UnitEnum;

class InformationSourceResource extends Resource
{
    protected static ?string $model = InformationSource::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    protected static string|UnitEnum|null $navigationGroup = 'Trial Class';
    
    protected static ?int $navigationSort = 3;

    protected static ?string $recordTitleAttribute = 'Information';

    public static function form(Schema $schema): Schema
    {
        return InformationSourceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InformationSourcesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListInformationSources::route('/'),
            'create' => CreateInformationSource::route('/create'),
            'edit' => EditInformationSource::route('/{record}/edit'),
        ];
    }
}

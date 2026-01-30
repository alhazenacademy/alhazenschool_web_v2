<?php

namespace App\Filament\Resources\TrialTimes;

use App\Filament\Resources\TrialTimes\Pages\CreateTrialTime;
use App\Filament\Resources\TrialTimes\Pages\EditTrialTime;
use App\Filament\Resources\TrialTimes\Pages\ListTrialTimes;
use App\Filament\Resources\TrialTimes\Schemas\TrialTimeForm;
use App\Filament\Resources\TrialTimes\Tables\TrialTimesTable;
use App\Models\TrialTime;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

use UnitEnum;

class TrialTimeResource extends Resource
{
    protected static ?string $model = TrialTime::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClock;

    protected static string|UnitEnum|null $navigationGroup = 'Trial Class';
    
    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'Trial Time';

    public static function form(Schema $schema): Schema
    {
        return TrialTimeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TrialTimesTable::configure($table);
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
            'index' => ListTrialTimes::route('/'),
            'create' => CreateTrialTime::route('/create'),
            'edit' => EditTrialTime::route('/{record}/edit'),
        ];
    }
}

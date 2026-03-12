<?php

namespace App\Filament\Resources\Dancers;

use App\Filament\Resources\Dancers\Pages\CreateDancer;
use App\Filament\Resources\Dancers\Pages\EditDancer;
use App\Filament\Resources\Dancers\Pages\ListDancers;
use App\Filament\Resources\Dancers\Schemas\DancerForm;
use App\Filament\Resources\Dancers\Tables\DancersTable;
use Modules\Talent\Models\Dancer;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DancerResource extends Resource
{
    protected static ?string $model = Dancer::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return DancerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DancersTable::configure($table);
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
            'index' => ListDancers::route('/'),
            'create' => CreateDancer::route('/create'),
            'edit' => EditDancer::route('/{record}/edit'),
        ];
    }
}

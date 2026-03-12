<?php

namespace App\Filament\Resources\Models;

use App\Filament\Resources\Models\Pages\CreateModel;
use App\Filament\Resources\Models\Pages\EditModel;
use App\Filament\Resources\Models\Pages\ListModels;
use App\Filament\Resources\Models\Schemas\ModelForm;
use App\Filament\Resources\Models\Tables\ModelsTable;
use App\Models\Model;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ModelResource extends Resource
{
    protected static ?string $model = Model::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'resource';

    public static function form(Schema $schema): Schema
    {
        return ModelForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ModelsTable::configure($table);
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
            'index' => ListModels::route('/'),
            'create' => CreateModel::route('/create'),
            'edit' => EditModel::route('/{record}/edit'),
        ];
    }
}

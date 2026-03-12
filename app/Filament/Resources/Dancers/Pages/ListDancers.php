<?php

namespace App\Filament\Resources\Dancers\Pages;

use App\Filament\Resources\Dancers\DancerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDancers extends ListRecords
{
    protected static string $resource = DancerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

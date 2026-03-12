<?php

namespace App\Filament\Resources\Dancers\Pages;

use App\Filament\Resources\Dancers\DancerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDancer extends EditRecord
{
    protected static string $resource = DancerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

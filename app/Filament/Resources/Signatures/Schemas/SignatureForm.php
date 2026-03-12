<?php

namespace App\Filament\Resources\Signatures\Schemas;

use Filament\Schemas\Schema;

class SignatureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }
}

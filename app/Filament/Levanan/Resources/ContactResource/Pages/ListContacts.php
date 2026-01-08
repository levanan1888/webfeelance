<?php

namespace App\Filament\Levanan\Resources\ContactResource\Pages;

use App\Filament\Levanan\Resources\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // No create action for contacts usually
        ];
    }
}

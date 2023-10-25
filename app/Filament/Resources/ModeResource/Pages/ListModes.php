<?php

namespace App\Filament\Resources\ModeResource\Pages;

use App\Filament\Resources\ModeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListModes extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ModeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

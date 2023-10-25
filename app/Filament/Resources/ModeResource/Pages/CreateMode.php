<?php

namespace App\Filament\Resources\ModeResource\Pages;

use App\Filament\Resources\ModeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMode extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ModeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}

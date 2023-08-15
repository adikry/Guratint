<?php

namespace App\Filament\Resources\PortoResource\Pages;

use App\Filament\Resources\PortoResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPorto extends ViewRecord
{
    protected static string $resource = PortoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

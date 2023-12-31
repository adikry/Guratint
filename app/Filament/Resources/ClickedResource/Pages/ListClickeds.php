<?php

namespace App\Filament\Resources\ClickedResource\Pages;

use App\Filament\Resources\ClickedResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClickeds extends ListRecords
{
    protected static string $resource = ClickedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ClickedResource\Pages;

use App\Filament\Resources\ClickedResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClicked extends EditRecord
{
    protected static string $resource = ClickedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

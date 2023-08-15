<?php

namespace App\Filament\Resources\PortoResource\Pages;

use App\Filament\Resources\PortoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePorto extends CreateRecord
{
    protected static string $resource = PortoResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

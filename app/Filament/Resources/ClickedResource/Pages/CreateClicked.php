<?php

namespace App\Filament\Resources\ClickedResource\Pages;

use App\Filament\Resources\ClickedResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateClicked extends CreateRecord
{
    protected static string $resource = ClickedResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['total'] = 0;

        return $data;
    }
}

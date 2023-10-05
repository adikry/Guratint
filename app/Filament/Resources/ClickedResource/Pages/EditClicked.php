<?php

namespace App\Filament\Resources\ClickedResource\Pages;

use App\Filament\Resources\ClickedResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class EditClicked extends EditRecord
{
    protected static string $resource = ClickedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        if ($record->logo != $data['logo']) {
            if ($record->logo != null) {
                Storage::delete($record->logo);
            }
        }

        $record->update($data);
        return $record;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

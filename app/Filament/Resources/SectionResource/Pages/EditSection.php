<?php

namespace App\Filament\Resources\SectionResource\Pages;

use App\Filament\Resources\SectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class EditSection extends EditRecord
{
    protected static string $resource = SectionResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        if ($record->thumbnail != $data['thumbnail']) {
            if ($record->thumbnail != null) {
                Storage::delete($record->thumbnail);
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

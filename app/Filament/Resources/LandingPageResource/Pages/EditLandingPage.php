<?php

namespace App\Filament\Resources\LandingPageResource\Pages;

use App\Filament\Resources\LandingPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class EditLandingPage extends EditRecord
{
    protected static string $resource = LandingPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->before(function ($record) {
                    for ($i = 0; $i < count($record->content); $i++) {
                        if ($record->content[$i]['content']) {
                            Storage::delete($record->content[$i]['content']);
                        }

                        if ($record->content[$i]['video']) {
                            Storage::delete($record->content[$i]['video']);
                        }
                    }
                }),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {

        for ($i = 0; $i < count($record->content); $i++) {
            if ($record->content[$i]['video'] != $data['content'][$i]['video']) {
                if ($record->content[$i]['video'] != null)
                    Storage::delete($record->content[$i]['video']);
            }

            if ($record->content[$i]['content'] != $data['content'][$i]['content']) {
                if ($record->content[$i]['content'] != null) {
                    Storage::delete($record->content[$i]['content']);
                }
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

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Filament\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationLabel = 'List Client';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Kontak';

    protected static ?string $slug = 'client';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('logo')
                    ->image()
                    ->maxSize(2048)
                    ->directory('client')
                    ->preserveFilenames()
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                            ->prepend(now()->timestamp . "_"),
                    )
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('logo')
                    ->height(60),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->before(function (Model $record, array $data) {
                        if ($record->logo != $data['logo']) {
                            if ($record->logo != null) {
                                Storage::delete($record->logo);
                            }
                        }
                    }),
                Tables\Actions\DeleteAction::make()
                    ->before(function ($record) {
                        if ($record->logo) {
                            Storage::delete($record->logo);
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function (Collection $records) {
                            foreach ($records as $record) {
                                Storage::delete($record->logo);
                            }
                        }),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ])->defaultSort('id', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageClients::route('/'),
        ];
    }
}

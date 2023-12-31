<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandingPageResource\Pages;
use App\Filament\Resources\LandingPageResource\RelationManagers;
use App\Models\LandingPage;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class LandingPageResource extends Resource
{
    protected static ?string $model = LandingPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    protected static ?string $navigationGroup = 'Konten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)
                    ->schema([
                        FileUpload::make('video')
                            ->acceptedFileTypes(['video/mp4', 'video/ogg', 'video/webm'])
                            ->maxSize(5120)
                            ->directory('content-video'),
                        Toggle::make('isActive')
                            ->required()
                            ->inline(false),
                        Select::make('button')
                            ->options([
                                'Whatsapp' => 'Whatsapp',
                                'Instagram' => 'Instagram',
                                'Tiktok' => 'Tiktok'
                            ])
                            ->searchable()
                            ->preload(),
                        TextInput::make('link')
                            ->maxLength(128),
                        Repeater::make('content')
                            ->schema([
                                FileUpload::make('content')
                                    ->image()
                                    ->optimize('webp')
                                    ->resize(30)
                                    ->maxSize(1024)
                                    ->directory('content-landing'),
                            ])
                            ->reorderable(false),
                    ]),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('content')->view('filament.tables.columns.content'),
                ToggleColumn::make('isActive'),
                TextColumn::make('created_at')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->before(function ($record) {
                        for ($i = 0; $i < count($record->content); $i++) {
                            if ($record->content[$i]['content']) {
                                Storage::delete($record->content[$i]['content']);
                            }
                        }
                        if ($record->video) {
                            Storage::delete($record->video);
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function (Collection $records) {
                            foreach ($records as $record) {
                                for ($i = 0; $i < count($record->content); $i++) {
                                    if ($record->content[$i]['content']) {
                                        Storage::delete($record->content[$i]['content']);
                                    }
                                }
                                if ($record->video) {
                                    Storage::delete($record->video);
                                }
                            }
                        }),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLandingPages::route('/'),
            'create' => Pages\CreateLandingPage::route('/create'),
            'edit' => Pages\EditLandingPage::route('/{record}/edit'),
        ];
    }
}

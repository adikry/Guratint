<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortoResource\Pages;
use App\Filament\Resources\PortoResource\RelationManagers;
use App\Models\Porto;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PortoResource extends Resource
{
    protected static ?string $model = Porto::class;

    protected static ?string $navigationLabel = 'Portofolio';

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = "Konten";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('nama')
                                    ->required()
                                    ->maxLength(255)
                                    ->reactive()
                                    ->debounce()
                                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                        if (($get('slug') ?? '') !== Str::slug($old)) {
                                            return;
                                        }

                                        $set('slug', Str::slug($state));
                                    }),
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255),
                                Forms\Components\FileUpload::make('thumbnail')
                                    ->image()
                                    ->optimize('webp')
                                    ->resize('40')
                                    ->maxSize(1024)
                                    ->directory('porto-head')
                                    ->required(),
                                Forms\Components\Select::make('kategori_id')
                                    ->relationship('kategori', 'nama')
                                    ->searchable(['nama'])
                                    ->preload()
                                    ->required(),
                                Grid::make(2)
                                    ->schema([
                                        Forms\Components\DateTimePicker::make('published_at')
                                            ->placeholder('Tanggal Publikasi')
                                            ->firstDayOfWeek(7)
                                            ->default(now())
                                            ->displayFormat('d/M/Y'),
                                        Group::make()
                                            ->schema([
                                                Grid::make(2)
                                                    ->schema([
                                                        Toggle::make('isActive')
                                                            ->inline(false),
                                                        Toggle::make('forHomepage')
                                                            ->inline(false)
                                                    ])
                                            ])
                                    ])
                            ]),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->height(100),
                Tables\Columns\TextColumn::make('nama')
                    ->limit(50)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();

                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }

                        // Only render the tooltip if the column content exceeds the length limit.
                        return $state;
                    })
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kategori.nama')
                    ->sortable()
                    ->searchable(),
                ToggleColumn::make('isActive')
                    ->sortable(),
                ToggleColumn::make('forHomepage')
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->since()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d-M-Y')
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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->before(function ($record) {

                        if ($record->content) {
                            Storage::delete($record->content);
                        }

                        if ($record->thumbnail) {
                            Storage::delete($record->thumbnail);
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function (Collection $records) {
                            foreach ($records as $konten) {

                                if ($konten->content) {
                                    Storage::delete($konten->content);
                                }

                                if ($konten->thumbnail) {
                                    Storage::delete($konten->thumbnail);
                                }
                            }
                        })
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->defaultSort('id', 'desc');
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
            'index' => Pages\ListPortos::route('/'),
            'create' => Pages\CreatePorto::route('/create'),
            'view' => Pages\ViewPorto::route('/{record}'),
            'edit' => Pages\EditPorto::route('/{record}/edit'),
        ];
    }
}

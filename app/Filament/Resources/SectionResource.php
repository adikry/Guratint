<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionResource\Pages;
use App\Filament\Resources\SectionResource\RelationManagers;
use App\Models\Section;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionResource extends Resource
{
    protected static ?string $model = Section::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Konten';

    protected static ?string $modelLabel = 'Section Image';

    protected static ?string $navigationLabel = 'Section Image';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('nama')
                    ->required()
                    ->searchable()
                    // ->disabled()
                    ->options([
                        'Hero Image' => 'Hero Image',
                        'WA Image' => 'WA Image',
                        'Tentang Kami' => 'Tentang Kami'
                    ])
                    ->preload(),
                Forms\Components\Toggle::make('isActive')
                    ->inline(false)
                    ->required(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->required()
                    ->image()
                    ->resize(30)
                    ->optimize('webp')
                    ->maxSize('1024')
                    ->directory('section-image'),
                Forms\Components\Textarea::make('desc')
                    ->required()
                    ->rows(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->height(60),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('isActive'),
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
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListSections::route('/'),
            'create' => Pages\CreateSection::route('/create'),
            'edit' => Pages\EditSection::route('/{record}/edit'),
        ];
    }
}

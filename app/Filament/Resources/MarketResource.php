<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MarketResource\Pages;
use App\Filament\Resources\MarketResource\RelationManagers;
use App\Models\Market;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MarketResource extends Resource
{
    protected static ?string $model = Market::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Konten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\Select::make('applicationName')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->options([
                                'meta' => 'Meta',
                                'meta2' => 'Meta API',
                                'tiktok' => 'Tiktok',
                                'googleTag' => 'Google Tag',
                                'googleAnalytics' => 'Google Analytics',
                            ])
                            ->unique(ignoreRecord: true),
                        Toggle::make('isActive')
                            ->inline(false),
                        Forms\Components\Textarea::make('head')
                            ->required()
                            ->rows(4),
                        Forms\Components\Textarea::make('body')
                            ->rows(4),
                    ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('applicationName')
                    ->searchable(),
                ToggleColumn::make('isActive'),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListMarkets::route('/'),
            'create' => Pages\CreateMarket::route('/create'),
            'view' => Pages\ViewMarket::route('/{record}'),
            'edit' => Pages\EditMarket::route('/{record}/edit'),
        ];
    }
}

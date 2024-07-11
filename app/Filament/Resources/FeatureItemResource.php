<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeatureItemResource\Pages;
use App\Filament\Resources\FeatureItemResource\RelationManagers;
use App\Models\FeatureItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeatureItemResource extends Resource
{
    protected static ?string $model = FeatureItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('data_wow_delay')
                    ->numeric(),
                Forms\Components\TextInput::make('h4title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('paragraph')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('feature_icon')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('data_wow_delay')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('h4title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('paragraph')
                    ->searchable(),
                Tables\Columns\TextColumn::make('feature_icon')
                    ->searchable(),
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
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListFeatureItems::route('/'),
            'create' => Pages\CreateFeatureItem::route('/create'),
            'edit' => Pages\EditFeatureItem::route('/{record}/edit'),
        ];
    }
}

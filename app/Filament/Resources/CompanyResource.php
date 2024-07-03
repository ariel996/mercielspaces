<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyResource\Pages;
use App\Filament\Resources\CompanyResource\RelationManagers;
use App\Models\Company;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('hotline')
                    ->required()
                    ->placeholder('+237 xxxxxx')
                    ->maxLength(255),
                Forms\Components\Textarea::make('location')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('official_email')
                    ->placeholder('email.example.com')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('facebook')
                    ->placeholder('https://example.com')
                    ->maxLength(255),
                Forms\Components\TextInput::make('instagram')
                    ->placeholder('https://example.com')
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkedin')
                    ->placeholder('https://example.com')
                    ->maxLength(255),
                Forms\Components\TextInput::make('youtube')
                    ->placeholder('https://example.com')
                    ->maxLength(255),
                Forms\Components\RichEditor::make('description')
                    ->required(),
                Forms\Components\RichEditor::make('brief_description')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hotline')
                    ->searchable(),
                Tables\Columns\TextColumn::make('official_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook')
                    ->searchable(),
                Tables\Columns\TextColumn::make('instagram')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCompanies::route('/'),
        ];
    }
}

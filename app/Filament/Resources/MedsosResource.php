<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedsosResource\Pages;
use App\Filament\Resources\MedsosResource\RelationManagers;
use App\Models\Medsos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MedsosResource extends Resource
{
    protected static ?string $model = Medsos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('location')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('location_maps')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('phone_number')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('instagram')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('facebook')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\TextColumn::make('location_maps'),
                Tables\Columns\TextColumn::make('phone_number'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('instagram'),
                Tables\Columns\TextColumn::make('facebook'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
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
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListMedsos::route('/'),
            'create' => Pages\CreateMedsos::route('/create'),
            'edit' => Pages\EditMedsos::route('/{record}/edit'),
        ];
    }
}

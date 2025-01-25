<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProvjabarResource\Pages;
use App\Filament\Resources\ProvjabarResource\RelationManagers;
use App\Models\Provjabar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProvjabarResource extends Resource
{
    protected static ?string $model = Provjabar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('alt_name')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('latitude')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('longitude')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('luas_wilayah')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_penduduk')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kepala_keluarga')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pendidikan_s1')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_guru')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alt_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('latitude')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('longitude')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('luas_wilayah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_penduduk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kepala_keluarga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pendidikan_s1')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_guru')
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProvjabars::route('/'),
            'create' => Pages\CreateProvjabar::route('/create'),
            'edit' => Pages\EditProvjabar::route('/{record}/edit'),
        ];
    }
}

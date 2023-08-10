<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserVisitResource\Pages;
use App\Filament\Resources\UserVisitResource\RelationManagers;
use App\Models\UserVisit;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserVisitResource extends Resource
{
    protected static ?string $model = UserVisit::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('country')
                    ->maxLength(255),
                Forms\Components\TextInput::make('countryCode')
                    ->maxLength(255),
                Forms\Components\TextInput::make('region')
                    ->maxLength(255),
                Forms\Components\TextInput::make('regionName')
                    ->maxLength(255),
                Forms\Components\TextInput::make('city')
                    ->maxLength(255),
                Forms\Components\TextInput::make('zip')
                    ->maxLength(255),
                Forms\Components\TextInput::make('lat')
                    ->maxLength(255),
                Forms\Components\TextInput::make('lon')
                    ->maxLength(255),
                Forms\Components\TextInput::make('timezone')
                    ->maxLength(255),
                Forms\Components\TextInput::make('isp')
                    ->maxLength(255),
                Forms\Components\TextInput::make('org')
                    ->maxLength(255),
                Forms\Components\TextInput::make('as')
                    ->maxLength(255),
                Forms\Components\TextInput::make('query')
                    ->maxLength(255),
                Forms\Components\TextInput::make('status')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Split::make([
                    Tables\Columns\TextColumn::make('country')->searchable()->sortable(),
                    // Tables\Columns\TextColumn::make('countryCode'),
                    Tables\Columns\TextColumn::make('region')->sortable(),
                    Tables\Columns\TextColumn::make('regionName')->sortable(),
                    Tables\Columns\TextColumn::make('city')->sortable(),
                    Tables\Columns\TextColumn::make('zip')->sortable(),
                    // Tables\Columns\TextColumn::make('lat'),
                    // Tables\Columns\TextColumn::make('lon'),
                    Tables\Columns\TextColumn::make('timezone')->sortable(),
                    Tables\Columns\TextColumn::make('isp')->sortable(),
                    Tables\Columns\TextColumn::make('org'),
                    Tables\Columns\TextColumn::make('as'),
                    Tables\Columns\TextColumn::make('query'),
                    // Tables\Columns\TextColumn::make('status'),
                    Tables\Columns\TextColumn::make('created_at')
                        ->dateTime(),
                    // Tables\Columns\TextColumn::make('updated_at')
                    //     ->dateTime(),
                // ])
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListUserVisits::route('/'),
            'create' => Pages\CreateUserVisit::route('/create'),
            'edit' => Pages\EditUserVisit::route('/{record}/edit'),
        ];
    }    
}

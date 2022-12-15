<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExpenseResource\Pages;
use App\Filament\Resources\ExpenseResource\RelationManagers;
use App\Filament\Resources\ExpenseResource\Widgets\ExpenseOverview;
use App\Models\Expense;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;

 

class ExpenseResource extends Resource
{
    protected static ?string $model = Expense::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(auth()->user()->id)
                    ->required(),
                Forms\Components\TextInput::make('amount')
                    ->required(),
                Forms\Components\Select::make('pos_neg')
                ->options([
                    0 => 'Credit',
                   1 => 'Debit',
                  
                ])
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(255),
              
                Forms\Components\DateTimePicker::make('created_at')
                    ->label('Transaction Date')
                    ->maxDate(now())  
                    ->default(now()),
                Toggle::make('home_transaction')
                    ->label('Home Transaction'),
                                
            ]);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->rowIndex(),
                Tables\Columns\TextColumn::make('amount') ->formatStateUsing(fn (string $state): string => __("{$state} ₹")),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('pos_neg')
                    ->formatStateUsing(fn (string $state): string =>  ($state == 1)?  "Debit" : "Credit" )
                    ->color(function (TextColumn $column): ?string {
                        $state = $column->getState();
                 
                        if ($state == 1) {
                            return 'danger';
                        }
                        return 'success';
                    })
                        ->label("Transaction Type"),
                Tables\Columns\TextColumn::make('home_transaction')
                    ->formatStateUsing(fn (string $state): string => ($state == 0)?  "No" : "Yes"  )
                    ->label("Home Transaction"),
                Tables\Columns\TextColumn::make('created_at')
                    ->label("Transaction Date")
                    ->dateTime(),


                // Tables\Columns\TextColumn::make('created_at')
                //      ->label("Transaction Since")
                //     ->dateTime(),
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

    public static function getWidgets(): array
    {

        return [
            
            ExpenseOverview::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExpenses::route('/'),
            'create' => Pages\CreateExpense::route('/create'),
            'edit' => Pages\EditExpense::route('/{record}/edit'),
        ];
    }    
}

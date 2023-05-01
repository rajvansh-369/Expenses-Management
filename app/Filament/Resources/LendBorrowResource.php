<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LendBorrowResource\Pages;
use App\Filament\Resources\ExpenseResource\Pages as ExpPage;
use App\Filament\Resources\LendBorrowResource\RelationManagers;
use App\Models\Expense;
use App\Models\LendBorrow;
use Closure;
use Filament\Forms;

use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\IconColumn;

class LendBorrowResource extends Resource
{
    protected static ?string $model = LendBorrow::class;

    protected static ?string $navigationIcon = 'ri-arrow-left-right-fill';
    protected static ?string $navigationGroup = 'Expense Management';


    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {

        
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->rowIndex(),
                Tables\Columns\TextColumn::make('lend_borrow')
                ->formatStateUsing(fn (string $state): string =>  ($state == 1)?  "Borrow" : "Lend" )
                ->color(function (TextColumn $column): ?string {
                    $state = $column->getState();
             
                    if ($state == 1) {
                        return 'warning';
                    }
                    return 'success';
                })
                         ->weight('bold')
                        ->label('Lend/Borrow'),
                Tables\Columns\TextColumn::make('from')
                ->weight('bold'),
                Tables\Columns\TextColumn::make('to')
                ->weight('bold'),
                IconColumn::make('status')
                        ->boolean(),
                Tables\Columns\TextColumn::make('expenses.amount')
                ->weight('bold')
                    ,
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('edit')
                    ->label('Edit post')
                    ->url(function (LendBorrow $record){
                    return "expenses/".$record->expense_id."/edit";
                    // url('expenses', $record->expense_id)."/edit") 
                    })
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
            'index' => Pages\ListLendBorrows::route('/'),
            'create' => Pages\CreateLendBorrow::route('/create'),
            'edit' =>  ExpPage\EditExpense::route('/{record}/edit'),
        ];
    }    
}

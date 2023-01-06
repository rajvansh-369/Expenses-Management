<?php

namespace App\Filament\Widgets;

use App\Models\Expense;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;

class Expenses extends BaseWidget
{       
    protected static ?int $sort = 5;
    protected int | string | array $columnSpan = 'full';
    
    protected function getTableQuery(): Builder
    {
        return Expense::query()->where('user_id', auth()->user()->id)->orderBy('transaction_date','Desc')->latest();
    }

    protected function getTableColumns(): array
    {
        return [
                // Tables\Columns\TextColumn::make('user_id'),
                TextColumn::make('id')->rowIndex(),
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
                        ->formatStateUsing(fn (string $state): string => ($state == false)?  "No" : "Yes"  )
                        ->label("Home Transaction"),
                Tables\Columns\TextColumn::make('transaction_date')
                    ->label("Transaction Date")
                    ->dateTime('D  M d, Y h:i A'),
                Tables\Columns\TextColumn::make('created_at')
                     ->label("Transaction Since")
                     ->since(),

                     
        ];
    }
}

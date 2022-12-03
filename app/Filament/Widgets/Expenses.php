<?php

namespace App\Filament\Widgets;

use App\Models\Expense;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class Expenses extends BaseWidget
{       
    protected static ?int $sort = 3;
    protected int | string | array $columnSpan = 'full';
    
    protected function getTableQuery(): Builder
    {
        return Expense::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
                // Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('amount'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('pos_neg'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
        ];
    }
}

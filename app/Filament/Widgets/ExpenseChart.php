<?php

namespace App\Filament\Widgets;
use App\Models\Expense;
use Filament\Widgets\LineChartWidget;
use Illuminate\Database\Eloquent\Builder;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;


class ExpenseChart extends LineChartWidget
{
    protected static ?int $sort = 2;
    protected static ?string $heading = 'Debit';
    protected function getData(): array
    {
        // $activeFilter = 0;
       
        $activeFilter =  ($this->filter) ?? 0;



       
        $data = Trend::query(Expense::where('pos_neg', 1))
        ->between(
            start: now()->startOfMonth()->subDay($activeFilter),
            end: now()->endOfMonth(),
        )
        ->perDay()
        ->sum('amount');


        return [
            'datasets' => [
                [
                    'label' => 'Amount',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => date('d-M',strtotime($value->date) )),
        ];
    }

    protected function getFilters(): ?array
        {
            return [

                0 => 'Today',
                7  => 'Last week',
                30  => 'Last month',
                365  => 'This year',
                 
            ];
        }

        
}

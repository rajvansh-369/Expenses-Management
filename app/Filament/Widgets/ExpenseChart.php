<?php

namespace App\Filament\Widgets;
use App\Models\Expense;
use Filament\Widgets\LineChartWidget;
use Illuminate\Database\Eloquent\Builder;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;


class ExpenseChart extends LineChartWidget
{
    protected static ?int $sort = 3;
    protected static ?string $heading = 'Debit';
    // protected static ?string $pollingInterval = '10s';
    protected function getData(): array
    {
        // $activeFilter = 0;
       
        $activeFilter =  ($this->filter) ?? 0;

        if($this->filter == 1){
           $filterByHomeDebit = 0;
           $filterByColumn = 'home_transaction';
        }elseif($this->filter == 2){
            $filterByHomeDebit = 1;
            $filterByColumn = 'home_transaction';
        }else{
            $filterByHomeDebit = auth()->user()->id;
            $filterByColumn = 'user_id';
        }

       
        $data = Trend::query(Expense::where('pos_neg', 1)->where('user_id', auth()->user()->id)->where($filterByColumn, $filterByHomeDebit))
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
         
                // $data = [ 'dayWise' => [

                //         0 => 'Today',
                //         7  => 'Last week',
                //         30  => 'Last month',
                //         365  => 'This year',
                         
                //     ],
                //     'transactionType' => [

                //         0 => "All Type",
                //         1 => "Except Home Transaction",
                //     ]

                //     ];
         
            return [

                0 => 'Today',
                7  => 'Last week',
                30  => 'Last month',
                365  => 'This year',
                1  => 'Except Home',
                2  => 'Only Home',
                 
            ];
        }

        
}

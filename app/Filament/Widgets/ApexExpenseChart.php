<?php

namespace App\Filament\Widgets;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\Expense;

class ApexExpenseChart extends ApexChartWidget
{

    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 3;
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'apexExpenseChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Credit v/s Expense Chart';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {


        $activeFilter =  ($this->filter) ?? 0;

        $activeFilter =  ($this->filter) ?? 0;

        if($this->filter == 1){
           $filterByHomeDebit = "1";
           $filterByColumn = 'home_transaction'; 
        }elseif($this->filter == 2){
            $filterByHomeDebit = 1;
            $filterByColumn = 'home_transaction';
        }
        else{
            $filterByHomeDebit = auth()->user()->id;
            $filterByColumn = 'user_id';
        }




    $Creditdata = Trend::query(Expense::where('pos_neg', 0)->where('user_id', auth()->user()->id)->where($filterByColumn, $filterByHomeDebit))
        ->between(
            start: now()->startOfMonth()->subDay($activeFilter),
            end: now()->endOfMonth(),
        )
        ->perDay()
        ->sum('amount');

        // EXPENSE Data #########################################endregion



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

       
        $expenseData = Trend::query(Expense::where('pos_neg', 1)->where('user_id', auth()->user()->id)->where($filterByColumn, $filterByHomeDebit))
        ->between(
            start: now()->startOfMonth()->subDay($activeFilter),
            end: now()->endOfMonth(),
        )
        ->perDay()
        ->sum('amount');



        return [
            'chart' => [
                'type' => 'area',
                'height' => 300,
                'toolbar' => [
                    'show' => false,
                ],
            ],
            'series' => [
                [
                    'name' => 'Credit',
                    'data' => $Creditdata->map(fn (TrendValue $value) => $value->aggregate),
                ],
                [
                    'name' => 'Expense',
                    'data' => $expenseData->map(fn (TrendValue $value) => $value->aggregate),
                ],

            ],
            'xaxis' => [
                'categories' => $Creditdata->map(fn (TrendValue $value) => date('d-M',strtotime($value->date) )),
                'labels' => [
                    'style' => [
                        'colors' => '#9ca3af',
                        'fontWeight' => 600,
                    ],
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'colors' => '#9ca3af',
                        'fontWeight' => 600,
                    ],
                ],
            ],
            'legend' => [
                'labels' => [
                    'colors' => '#9ca3af',
                    'fontWeight' => 600,
                ],
            ],
            'colors' => ['#FF0000', '#1BFF00'],
            'stroke' => [
                'curve' => 'smooth',
            ],
            'dataLabels' => [
                'enabled' => false,
            ],
       
        ];
    }
    protected function getFilters(): ?array
    {
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

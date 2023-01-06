<?php

namespace App\Filament\Widgets;
use App\Models\Expense;
use Filament\Widgets\LineChartWidget;
use Illuminate\Database\Eloquent\Builder;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class DebitApexChart extends ApexChartWidget
{

    protected static ?int $sort = 3;
    protected int | string | array $columnSpan = 'full';
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'debitApexChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Expenses';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {

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
            'chart' => [
                'type' => 'area',
                'height' => 400,
            ],
            'series' => [
                [
                    'name' => 'DebitApexChart',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'xaxis' => [
                'categories' => $data->map(fn (TrendValue $value) => date('d-M',strtotime($value->date) )),
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
            'colors' => ['#ff3300'],
            'stroke' => [
                'curve' => 'smooth',
            ],
            'dataLabels' => [
                'enabled' => true,
                'style' => [
                    'fontWeight' => 100,
                    'fontSize'=> '8px',
                ],
                 
            ],
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
            1  => 'Except Home Debit',
            2  => 'Only Home Debit',
             
        ];
    }
}

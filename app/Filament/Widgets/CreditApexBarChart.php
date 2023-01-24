<?php

namespace App\Filament\Widgets;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;
use App\Models\Expense;

class CreditApexBarChart extends ApexChartWidget
{

    protected static ?int $sort = 2;
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'creditApexBarChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Monthly Credit';

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
        }else{
            $filterByHomeDebit = auth()->user()->id;
            $filterByColumn = 'user_id';
        }


        $data = Trend::query(Expense::where('pos_neg', 0)->where('user_id', auth()->user()->id)->where($filterByColumn, $filterByHomeDebit))
        ->between(
            start: now()->startOfMonth()->subDay(30),
            end: now()->endOfMonth(),
        )
        ->perMonth()
        ->sum('amount');
// dd($data->map(fn (TrendValue $value) => $value->aggregate));

        return [
            'chart' => [
                'type' => 'bar',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'BasicBarChart',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'xaxis' => [
                'categories' =>  $data->map(fn (TrendValue $value) => date('M-Y',strtotime($value->date) )),
                // 'min' => 0,
                // 'max' => 30,
                'labels' => [
                    'style' => [
                        'colors' => '#9ca3af',
                        'fontWeight' => 200,
                    ],
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'colors' => '#9ca3af',
                        'fontWeight' => 200,
                    ],
                ],
            ],
            'colors' => ['#6366f1'],
            'plotOptions' => [
                'bar' => [
                    'borderRadius' => 3,
                    'horizontal' => true,
                ],
            ],
            'grid' => [
                'show' => false,
            ],
            'dataLabels' => [
                'enabled' => true,
            ],
            'colors' => ['#f43f5e', '#ffff00'],
            'fill' => [
                'type' => 'gradient',
                'gradient' => [
                    'shade' => 'dark',
                    'type' => 'horizontal',
                    'shadeIntensity' => 0.5,
                    'gradientToColors' => ['#00cc66'],
                    'inverseColors' => false,
                    'opacityFrom' => 1,
                    'opacityTo' => 1,
                    'stops' => [0, 100],
                ],
            ],

        ];
    }

    protected function getFilters(): ?array
    {
        return [

            0 => 'Current',
            1  => 'Recived From Home',
             
        ];
    }
}

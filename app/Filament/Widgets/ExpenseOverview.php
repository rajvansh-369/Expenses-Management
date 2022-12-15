<?php

namespace App\Filament\Widgets;

use App\Models\Expense;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Carbon\Carbon;

class ExpenseOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getCards(): array
    {   
        $Creditsum= 0;
        $lastMonth = Carbon::now()->subDay(30);
        $loggedID = auth()->user()->id;
        $Credit = Expense::where('user_id', $loggedID)->where('pos_neg', 0)->where('user_id', auth()->user()->id);    
        $Creditsum =   $Credit->sum('amount');
        $CreditamountArr = $Credit->pluck('amount')->toArray();

        $lastMonthSumCredit = $Credit->where('created_at', $lastMonth)->sum('amount');
        $lastMonthSumCredit = 1;

            if($lastMonthSumCredit > $Creditsum){

                $pastCalcCredit = (($Creditsum - $lastMonthSumCredit  )/$lastMonthSumCredit)*100;
                $incrementCredit = 'heroicon-s-trending-down';
                $colorCredit = 'danger';

            }else{

                $pastCalcCredit = (($Creditsum - $lastMonthSumCredit  )/$Creditsum)*100;
                $incrementCredit = 'heroicon-s-trending-up';
                $colorCredit = 'success';

            }


            $Debitsum= 0;
        $Debit = Expense::where('user_id', $loggedID)->where('pos_neg', 1)->where('user_id', auth()->user()->id);
        $Debitsum =   $Debit->sum('amount');
        $DebitamountArr = $Debit->pluck('amount')->toArray();
        $lastMonthSumDebit = $Credit->where('created_at', $lastMonth)->sum('amount');
        $lastMonthSumDebit = 1;

        if($lastMonthSumDebit > $Creditsum){

            $pastCalcDebit = (($Creditsum - $lastMonthSumDebit  )/$lastMonthSumDebit)*100;
            $incrementDebit = 'heroicon-s-trending-up';
            $colorDebit = 'sucess';

        }else{

            $pastCalcDebit = (($Creditsum - $lastMonthSumDebit  )/$Creditsum)*100;
            $incrementDebit = 'heroicon-s-trending-down';
            $colorDebit = 'danger';

        }


        $currentBalance = $Creditsum - $Debitsum;
        

        return [
            Card::make('Total Credit', $Creditsum)
                ->description($pastCalcCredit.'%')
                ->chart($CreditamountArr)
                ->descriptionIcon($incrementCredit)
                ->color($colorCredit),
            Card::make('Total Debit',  $Debitsum)
                ->description($pastCalcDebit."%")
                ->chart($DebitamountArr)
                ->descriptionIcon($incrementDebit)
                ->color( $colorDebit),
            Card::make('Current Balance',  $currentBalance)
        ];
    }
}

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
        // $lastMonth = Carbon::now()->subDay(30);
        $lastMonth = Carbon::now()->subDay(1)->format('Y-m');
        $loggedID = auth()->user()->id;
        $Credit = Expense::where('user_id', $loggedID)->where('pos_neg', 0)->where('user_id', auth()->user()->id);    
        $Creditsum =   $Credit->sum('amount');
        $CreditsumCurrentMonth =  Expense::where('user_id', $loggedID)->where('pos_neg', 0)->where('transaction_date', '>',$lastMonth.'-01')->sum('amount');
        $CreditamountArr = $Credit->pluck('amount')->toArray();

        $lastMonthSumCredit = 1;
        $lastMonthSumCredit = $Credit->where('transaction_date', '<',$lastMonth.'-01')->sum('amount');

        // dd("debitSUM  ".$CreditsumCurrentMonth, "Last debitSUM  ".$lastMonthSumCredit );
        
        if($lastMonthSumCredit == 0){$lastMonthSumCredit= 1;}
            if($lastMonthSumCredit > $CreditsumCurrentMonth){

              
                $pastCalcCredit = (($CreditsumCurrentMonth)/$lastMonthSumCredit)*100;
                $incrementCredit = 'heroicon-s-trending-down';
                $colorCredit = 'danger';

            }else{

                $pastCalcCredit = (($CreditsumCurrentMonth)/$lastMonthSumCredit)*100;
                $incrementCredit = 'heroicon-s-trending-up';
                $colorCredit = 'success';

            }

            // ***************************************** D E B i T **********************************


        $Debitsum= 0;
        $Debit = Expense::where('user_id', $loggedID)->where('pos_neg', 1);
        $Debitsum =   $Debit->sum('amount');
        $DebitsumCurrentMonth =  Expense::where('user_id', $loggedID)->where('pos_neg', 1)->where('transaction_date', '>',$lastMonth.'-01')->sum('amount');
        $DebitamountArr = $Debit->pluck('amount')->toArray();
        $lastMonthSumDebit = 1;
        $lastMonthSumDebit = $Debit->where('transaction_date', '<',$lastMonth.'-01')->sum('amount');


        
        if($lastMonthSumDebit > $DebitsumCurrentMonth){

            $pastCalcDebit = (($DebitsumCurrentMonth)/$lastMonthSumDebit)*100;
            $incrementDebit = 'heroicon-s-trending-up';
            $colorDebit = 'success';

        }else{

            $pastCalcDebit = (($DebitsumCurrentMonth)/$lastMonthSumDebit)*100;
            $incrementDebit = 'heroicon-s-trending-down';
            $colorDebit = 'danger';
        }


        // dd($Creditsum, $Debitsum );
        $currentBalance = $Creditsum - $Debitsum;

        // $bal = $currentBalance;
        
        return [
            Card::make('Total Credit', "₹".number_format($Creditsum))
                ->description($pastCalcCredit.'%')
                ->chart($CreditamountArr)
                ->descriptionIcon($incrementCredit)
                ->color($colorCredit),
            Card::make('Total Debit',  "₹".number_format($Debitsum))
                ->description($pastCalcDebit."%")
                ->chart($DebitamountArr)
                ->descriptionIcon($incrementDebit)
                ->color( $colorDebit),
            Card::make('Current Balance',  "₹".number_format($currentBalance))
        ];
    }
}

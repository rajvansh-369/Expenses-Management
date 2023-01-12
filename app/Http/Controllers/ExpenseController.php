<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController as BaseController;
use Flowframe\Trend\Trend;

class ExpenseController extends BaseController
{
    


    public function authenticate(Request $request)
    {
      
      
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->plainTextToken;
            $success['name'] =  $user->name;
            $success['data'] =  $user;
            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }


    public function getTotalMonthCredit(){


            // $user =  Auth::user();
            //     if(!$user){

            //         return  $this->sendError('No data found!');
            //     } 
            $userId = 1;
            $trend = Trend::query(Expense::where('pos_neg', 0)->where('user_id', $userId))
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perMonth()
            ->sum('amount');
                if($trend){
                    return  $this->sendResponse($trend,'Success');
                }else{
                    return  $this->sendError('No data found!');
                }
    }
    
}

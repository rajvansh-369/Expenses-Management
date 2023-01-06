<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $casts = [
        'home_transaction' => 'boolean',
    ];

    protected $fillable = [
        'user_id',
        'amount',
        'description',
        'pos_neg',
        'transaction_date',
        'home_transaction',
    ];


    

}

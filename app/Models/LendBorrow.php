<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LendBorrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'expense_id',
        'lend_borrow',
        'from',
        'to',
        'status',
        
    ];

    public function project(){
        return $this->belongsTo(Expense::class,'id', 'expense_id');
    }
}

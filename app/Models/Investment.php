<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    protected $fillable = [
        'expense_id',
        'investmentName',
        'status',
        
    ];

    public function expenses(){

        return $this->belongsTo(Expense::class);
    }
}

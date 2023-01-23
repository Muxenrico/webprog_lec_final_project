<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'transaction_id',
        'transaction_qty'
    ];

    public function Transaction(){
        return $this->belongsto(Transaction::class, 'transaction_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    //many to many
    public function transaction_item(){
        return $this->belongstoMany(Transaction_item::class, 'transaction_items', 'product_id', 'transaction_id');
    }

    public function cart_item(){
        return $this->belongstoMany(Transaction_item::class, 'cart_items', 'product_id', 'cart_items_id');
    }


}

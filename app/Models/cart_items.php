<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart_items extends Model
{
    use HasFactory;

    public function Product(){
        return $this->belongsto(Transaction_item::class, 'product', 'cart_items_id', 'product_id');
    }
    
}

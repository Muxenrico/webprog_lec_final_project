<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionsController extends Controller
{
    //
    
    public function index_transactions(){

        $AuthId = Auth::id();

        $transactions = DB::table('transactions')
        ->where('user_id', '=', $AuthId) 
        ->get();
        // ->orderBy('created_by');

        $transaction_items = DB::table('transaction_items')
        ->join('products', 
        'transaction_items.product_id',
        '=',
        'products.id')
        ->get();

        return view('historyTransactionsPage', compact('transactions', 'transaction_items'));
    }
}

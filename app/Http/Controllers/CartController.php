<?php

namespace App\Http\Controllers;

use App\Models\cart_items;
use App\Models\Transaction;
use App\Models\Transaction_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request, $productId)
    {
        
        $AuthId = Auth::id();
        $data = DB::table('cart_items')->where('user_id', '=', $AuthId)
                ->where('product_id', '=', $productId)->first();
        if(!isset($data)){
            DB::table('cart_items')->insert([
                'user_id' => $AuthId,
                'product_id' => $productId, //didapatkan dari input fromInsertUpdate.
                'cart_qty' => $request->input('quantity'),
            ]);

            // Return to Shop page
            return redirect('/m-home'); # go to shop
        }else{
            return redirect('/editCart/'.$data->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCart()
    {
        $AuthId = Auth::id();
       // $cart_items = DB::table('cart_items')
        //->where('user_id', '=', $AuthId)
        //->first();

        $products = DB::table('products')
        ->join('cart_items', 'products.id', '=', 'cart_items.product_id')
        ->where('user_id', '=', $AuthId)
        ->SimplePaginate(4);

        $total_product = 0;
        $total_price = 0;

        foreach($products as $p){
            $total = $p->price*$p->cart_qty;
            $total_price += $total;
            $total_product += $p->cart_qty;
        };
        // return $products;

        #Show Cart Page
        return view('cartPage', compact('products', 'total_price', 'total_product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editCart($cart_items_id)
    {
        $AuthId = Auth::id();

        $curr_cart_items = DB::table('cart_items')
        ->where('user_id', '=', $AuthId)
        ->where('id', '=' , $cart_items_id)
        ->first();

        $curr_product_id = $curr_cart_items->product_id;

        $currProduct = DB::table('products')
        ->where('id', '=', $curr_product_id)
        ->first();

        #Show Edit Cart Page
        return view('editCartPage', compact('curr_cart_items', 'currProduct'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCart(Request $request, $cart_items_id)
    {
        
        DB::table('cart_items')
        ->where('id', '=', $cart_items_id)
        ->update([ //didapatkan dari input fromInsertUpdate.
            'cart_qty' => $request->input('quantity')
        ]);

        #back to cart page
        return redirect()->route('showCart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteFromCart($cart_items_id)
    {
        //
        DB::table('cart_items')
        ->where('id', '=', $cart_items_id)
        ->delete();

        #back to cart page
        return redirect()->route('showCart');
    }

    
    public function checkout(){
        
        $AuthId = Auth::id();
        date_default_timezone_set('Asia/Jakarta');

        $NewTransaction = new Transaction();
        $NewTransaction->user_id = $AuthId;
        $NewTransaction->save();

        $currCart = DB::table('cart_items')
        ->where('user_id', '=', $AuthId)
        ->get();

        $newTransactionId = Transaction::latest()->first()->id;

        foreach($currCart as $c){
            DB::table('transaction_items')->insert([
                'product_id' => $c->product_id,
                'transaction_id' => $newTransactionId,
                'transaction_qty' => $c->cart_qty
            ]);
        };

        $currCart = DB::table('cart_items')
        ->where('user_id', '=', $AuthId)
        ->delete();
        
        return redirect()->route('showHistoryPage');
    }

}

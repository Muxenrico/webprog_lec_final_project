<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller


{

    public function viewHome(){
        // view home\
        $products = Product::SimplePaginate(8);
        return view('memberHomePage')->with('products', $products);
    }

    public function viewHome2(){
        // view home\
        $products = Product::SimplePaginate(8);


        return view('adminHomePage')->with('products', $products);
    }

    public function viewPage(){
        $products = Product::SimplePaginate(4);

        return view('memberSearchPage')->with('products', $products);
    }

    public function viewPage2(){
        $products = Product::SimplePaginate(4);

        return view('adminSearchPage')->with('products', $products);
    }

    public function viewPageSearch(Request $request){
        $products = Product::where('name', 'LIKE', "%$request->search%")->SimplePaginate(4);

        return view('memberSearchPage')->with('products', $products);
    }

    public function viewPageSearch2(Request $request){
        $products = Product::where('name', 'LIKE', "%$request->search%")->SimplePaginate(4);

        return view('adminSearchPage')->with('products', $products);
    }

    public function viewProductDetail($productId){
        $currProduct = DB::table('products')
        ->where('products.id', '=', $productId)
        ->first();
        return view('memberProductDetail', compact('currProduct'));
    }

    public function viewProductDetail2($productId){
        $currProduct = DB::table('products')
        ->where('products.id', '=', $productId)
        ->first();
        return view('adminProductDetail', compact('currProduct'));
    }

    public function createProduct(){
        $products = DB::table('products')->get();
        return view('addItemPage', compact('products'));
    }

    public function insertProduct(Request $request){

        // Insert Items
        $image = $request->file('inputImage');
        $imageName = $image->getClientOriginalName();

        Storage::putFileAs('public/images/clothes/', $image, $imageName);
        $imagePath = $imageName;

        DB::table('products')->insert([
            'image' => $imagePath, //hanya path.
            'name' => $request->inputName,
            'description' => $request->inputDescription,
            'price' => $request->inputPrice,
            'stock' => $request->inputStock

        ]);
        return redirect('/a-home');

    }

    public function deleteProduct($productId){
        // DELETE ITEM
        DB::table('products')
        ->where('id', '=', $productId)
        ->delete();
        return redirect('/a-home');
    }


}

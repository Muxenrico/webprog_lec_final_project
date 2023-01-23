<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class WelcomePageController extends Controller
{
    

    public function index_welcome(){
        return view('welcomePage');
    }

    public function index_member(){
        // view home\
        $products = Product::SimplePaginate(8);

        return view('memberHomePage')->with('products', $products);
    }

    public function index_admin(){
        // view home\
        $products = Product::SimplePaginate(8);

        return view('adminHomePage')->with('products', $products);
    }
}

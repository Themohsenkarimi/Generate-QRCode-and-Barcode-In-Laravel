<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        
        $products = product::all();
        return view('index',compact('products'));

    }

    public function create(){

        return view('create');

    }

    public function store(Request $request){

        $number = mt_rand(1000000000,9999999999);
        
        if ($this->productCodeExists($number)) {
            $number = mt_rand(1000000000,999999999);
        }
        
        $request['product_code'] = $number;
        Product::create($request->all());

        return redirect('/');

    }

    public function productCodeExists($number){
        return product::whereProductCode($number)->exists();
    }

}

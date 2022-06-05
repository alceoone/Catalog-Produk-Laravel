<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\setting;

class BlogController extends Controller
{
    public function home(){
        $productsLimit = product::orderBy('products.created_at', 'DESC')->limit(4)->get();
        $settings = setting::find(1);
		return view('page/home', compact('productsLimit', 'settings'));
	}

    public function product() {
        $products = product::orderBy('products.created_at', 'DESC')->get();
        return view('page/product', compact('products'));
    }

}
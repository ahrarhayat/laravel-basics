<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductsController extends Controller
{
    //
    public function index()
    {
        //find folder of products with filename .index, which means products/index
        
        //print the route in the html
        print_r(route('products'));
        //compact method
        // return view('products.index', compact('title','description'));

        //with method
        //return view('products.index')->with('data',$data);

        //directly in the view
        return view('products.index');


    }


    public function about()
    {
        //find folder of products with filename .index, which means products/index
        return view('products.about');
    }

    public function show($name)
    {
        $data = ['iphone'=>'iPhone', 'samsung'=>'Samsung'];

        //return the value from the key requested in the url, if it does not exist, then return the text in the rhs

        return view('products.index',['products' => $data[$name] ?? 'Product '. $name .' does not exist'
       
    ]);

    }
}

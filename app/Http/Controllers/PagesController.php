<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
       
        return view('index');
    }

    public function about()
    
    {
        $name = "Zyan";
        $names = ['Ahrar','Hayat','Zyan'];
        return view('about',['names'=>$names]);
    }
}

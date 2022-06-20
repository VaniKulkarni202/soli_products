<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProdViewController extends Controller
{
    public function index()
    {
        $products = DB::select('select * from products');
        return view('prod_view',['products'=>$products]);
    }
}

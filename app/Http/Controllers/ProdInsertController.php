<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Http\Requests;
use App\Http\Controllers\Controller;

class ProdInsertController extends Controller
{
    public function insertform(){
        return view('prod_create');
    }


    public function insert(Request $request)
    {
        $name=$request->input('prod_name');
        $desc=$request->Input('prod_desc');
        //DB::insert('insert into products (name,desc) values (?),(?)',$name,$desc);

        $success = DB::table('products')
            ->insert(['prod_name' => $name, 'prod_desc' => $desc]);

            if($success)
            {
                $msg = "Success";

            }
            else
            {
                $msg = "Failed";
            }

            $products = DB::select('select * from products');

            return view('prod_view', ['message'=>$msg, 'products'=>$products]);

    }
}

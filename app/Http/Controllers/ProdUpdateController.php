<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProdUpdateController extends Controller
{

    public function edit($id)
    {
        // $product = Products::find($id);
        $product = DB::table('products')->where('id',$id)->first();
        return view('prod_edit',['product'=>$product]);

        // return view('product_edit');
    }


    public function update(Request $request, $id)
    {
        // ORM QUERY
        $prod = Product::find($id);
        $prod->prod_name = $request->prod_name;
        $prod->prod_desc = $request->prod_desc;
        $prod->save();


        // Normal query 
        // DB::table('products')->where('id',$id)
        // ->update(['prod_name' => $request->prod_name, 'prod_desc'=>$request->prod_desc]);
        return redirect('/products');

        // return redirect()->back()->with('status','Product List Updated Successfully');
    }

}
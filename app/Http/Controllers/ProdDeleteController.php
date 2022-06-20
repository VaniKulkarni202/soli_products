<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Http\Requests;
use DB;

class ProdDeleteController extends Controller{
   public function destroy($id) {
      DB::table('products')->where('id', $id)->delete();
    //   DB::delete('delete from products where id = ',$id);
    echo "Record deleted successfully.<br/>";
    return redirect('/products');

    //   return redirect()->route('/');
      
   }
}


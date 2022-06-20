
@extends('master')

@section('content')
        <table style="width:100%;margin-left:100px;">
    <tr>
        <td><button class="button button1" onclick="location.href='/insert'">Add Product</a></button></td>

  <td style="width:55%;text-center;"><h3>PRODUCTS LIST</h3></td>
  <td><input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button><td>
</tr>
</table>
  
  <br>
  <table style="width:90%;margin-left:80px;">
    <tr>
      <th>Product Name</th>
      <th style="width:60%">Product Description</th>
      <th>Action</th>
    </tr>

    @foreach ($products as $product)
<tr>
  <td>{{ $product->prod_name }}</td>
  <td>{{ $product->prod_desc }}</td>
  <td><button class="button button2">Edit</button>
  <button class="button button3">Remove</button>
  </td>

</tr>
@endforeach

  </tr>
  
 {{ @$message }}


  </table>
  


  @endsection


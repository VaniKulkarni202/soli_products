
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


  
  <td><a href="/prod_edit/{{$product->id}}"><button class="button button2">Edit</button></a>
  <!-- <button class="button button3" onclick="location.href='/destroy'">Remove</button> -->
  
  <!-- <form action="/delete/{{ $product->id }}" method="delete">
  <button class="button button3" type="submit">Delete</button>  
  </form> -->

  <a href="/delete/{{$product->id}}"><button class="button button3">Delete</button></a>



  </td>

</tr>
@endforeach

  </tr>
  
 {{ @$message }}


  </table>
  


  @endsection


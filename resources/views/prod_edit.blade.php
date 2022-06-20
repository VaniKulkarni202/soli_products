@extends('master')

@section('content')

<div class="container">

<form action="{{ url('update-product/'.$product->id) }}" method="post">
      @csrf
      <!-- @method('PUT') -->

      <div class="form-group mb-3">
            <label for="">Product Name</label>
            <input type="text" name="prod_name" value="{{$product->prod_name}}" class="form-control">
      </div>
      
      <div class="form-group mb-3">
            <label for="">Product Description</label>
            <input type="text" name="prod_desc" value="{{$product->prod_desc}}" class="form-control">
      </div>

      <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Update Student</button>
      </div>

   </form>
</div>

@endsection
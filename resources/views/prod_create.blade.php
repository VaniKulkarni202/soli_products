@extends('master')

@section('content')
      <form action = "/create" method = "post">
        @csrf
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Name</td>
               <td><input type='text' name='prod_name' /></td>
               <td>Description</td>
               <td><input type='text' name='prod_desc' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Product"/>
               </td>
            </tr>
         </table>
      </form>
      
   @endsection
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdViewController;
use App\Http\Controllers\ProdInsertController;
use App\Http\Controllers\ProdUpdateController;
use App\Http\Controllers\ProdDeleteController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
 
Route::get('/products', [ProdViewController::class, 'index']);

Route::get('insert',[ProdInsertController::class,'insertform']);
Route::post('create',[ProdInsertController::class,'insert']);

Route::get('edit-product/{id}', [ProdUpdateController::class, 'edit']);
// Route::put('update-product/{id}', [ProdUpdateController::class, 'update']);



Route::get('prod_edit/{id}', [ProdUpdateController::class, 'edit']);
Route::post('update-product/{id}', [ProdUpdateController::class, 'update']);

Route::get('delete/{id}',[ProdDeleteController::class,'destroy']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdViewController;
use App\Http\Controllers\ProdInsertController;


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

Route::get('homepage/', function () {
    return view('prod_view');
});

Route::get('/', [ProdViewController::class, 'index']);

Route::get('insert',[ProdInsertController::class,'insertform']);
Route::post('create',[ProdInsertController::class,'insert']);
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//  view product
Route::get('/product', [Product::class, 'viewProduct']);
// add product
Route::post('/addProduct', [Product::class, 'addProduct']);
// delete product
Route::delete('/deleteProduct/{id}', [Product::class, 'deleteProduct']);
//update product
Route::post('/updateProduct/{id}', [Product::class, 'updateProduct']);



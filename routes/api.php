<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('menus', 'MenuController@index')->name('api.menu.index');

Route::get('cart', 'CartController@index')->name('api.cart.index');
Route::post('add-to-cart', 'CartController@store')->name('api.cart.store');
Route::put('update-cart/{cart}', 'CartController@update')->name('api.cart.update');
Route::delete('delete-cart/{cart}', 'CartController@delete')->name('api.cart.delete');

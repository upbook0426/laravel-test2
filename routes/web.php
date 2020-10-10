<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Middleware\HelloMiddleware;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello',function(){
    return '<html><body><p>Nice</p></body></html>';
});

Route::get('hell','App\Http\Controllers\HelloController@index')
 ->middleware('hello');

Route::post('hello','HelloController@post');
   


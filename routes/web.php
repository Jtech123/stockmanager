<?php
use Illuminate\Support\Facades\App;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('products')->group(function() {
    Route::get('/', 'ProductController@index');
    Route::get('/add', 'ProductController@add');
    Route::post('/create', 'ProductController@create');
    Route::get('/edit/{id}', 'ProductController@edit');
    Route::get('/detail/{id}', 'ProductController@detail');
    Route::get('/delete/{id}', 'ProductController@delete');
});

Route::prefix('suppliers')->group(function() {
    Route::get('/', 'SupplierController@index');
    Route::get('/add', 'SupplierController@add');
    Route::get('/detail/{id}', 'SupplierController@detail');
    Route::get('/edit/{id}', 'SupplierController@edit');
    Route::post('/create', 'SupplierController@create');
});
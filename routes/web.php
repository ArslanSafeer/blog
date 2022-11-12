<?php

use Illuminate\Support\Facades\Route;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/testhome', 'HomeController@test')->name('testhome');
Route::resource('/layouts/project', 'Admin\ProjectController',['as'=>'layouts']);
Route::resource('/layouts/expense', 'Admin\ExpenseController',['as'=>'layouts']);
Route::resource('/layouts/income', 'Admin\IncomeController',['as'=>'layouts']);
Route::resource('/layouts/projectmember', 'Admin\ProjectMemberController',['as'=>'layouts']);
Route::resource('/layouts/projectuser', 'Admin\ProjectUserController',['as'=>'layouts']);
Route::resource('/layouts/projectdetail', 'Admin\ProjectDetailController',['as'=>'layouts']);
Route::resource('products', 'ProductController');
Route::get('products/fetch_image_by_id/{id}', 'ProductController@showall')->name('products.showall');


;

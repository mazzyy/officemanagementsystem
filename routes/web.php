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

Route::get('/',"ListingsController@index");
Auth::routes();
//listing
Route::resource("/Listings","ListingsController");
Route::get('/Listings/{id}/update1', 'ListingsController@update1');
Route::get('/Listings/{id}/destroy1', 'ListingsController@destroy1');
Route::get('/Listings/{id}/show1', 'ListingsController@show1');
Route::get('/Listings/{id}/fulldata', 'ListingsController@fulldata');
//employes
// Route::resource("/Employes","EmployesControler");
// Route::get("/Employess/{id}","EmployesControler@index");
Route::get("/Listings/{id}/employesdetails","ListingsController@employesdetails");

Route::get('/{id}/createemployes', "ListingsController@createemployes");

Route::get('/{id}/storeemploye', 'ListingsController@storeemploye');





// Route::get('/home', 'ListingsController@index');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

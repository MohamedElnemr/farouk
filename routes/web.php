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
    return view('home.index');
});



// Auth::routes();

// Auth::routes(['register' => false]); // لو عايز الغي الريجيستر من الموقع انا اللي اضيف كله العملاء

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/page-two', 'HomeController@pagetwo')->name('home');
Route::get('/page-three', 'HomeController@pagethree')->name('home');
Route::get('/page-four', 'HomeController@pagefour')->name('home');
Route::get('/page-five', 'HomeController@pagefive')->name('home');
Route::get('/page-six', 'HomeController@pagesix')->name('home');
Route::get('/page-seven', 'HomeController@pageseven')->name('home');
Route::get('/all-data', 'UnitController@index')->name('home');
Route::get('/data1', 'HomeController@data1')->name('data1');
Route::get('/data2', 'HomeController@data2')->name('data2');
Route::get('/data3', 'HomeController@data3')->name('data3');
Route::get('/data4', 'HomeController@data4')->name('data4');
Route::get('/data5', 'HomeController@data5')->name('data5');




Route::post('/add-page-one', 'HomeController@addpage1')->name('pageonestore');
Route::post('/add-page-two', 'HomeController@addpage2')->name('pagetwostore');
Route::post('/add-page-three', 'HomeController@addpage3')->name('pagethreestore');
Route::post('/add-page-four', 'HomeController@addpage4')->name('pagefourstore');
Route::post('/add-page-five', 'HomeController@addpage5')->name('pagefivestore');
Route::post('/add-page-six', 'UnitController@store')->name('pagesixstore');


Route::resource('invoices', 'InvoicesController');

Route::resource('sections', 'SectionsController');

Route::get('/{page}', 'AdminController@index');

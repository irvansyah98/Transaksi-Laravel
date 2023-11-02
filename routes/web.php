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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('item/export', 'ItemController@export');

Route::group(['prefix' => '/backend', 'middleware' => ['auth']], function() {
    Route::get('/', array('as' => 'dashboard', 'uses' => 'DashboardController@index'));

    Route::resource('item', 'ItemController');
    Route::resource('admin', 'AdminController');
    Route::resource('member', 'MemberController');
});
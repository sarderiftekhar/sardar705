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

// Admin dashbaord
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

// Blank page
Route::get('/blank', 'HomeController@blank')->name('blank');

// Appointments

// Client routes
Route::resource('clients','ClientController');

// Agents

// Properties

// Documents

// Income Expenditures

// User Settings

// Companies
Route::resource('companies','CompanyController');





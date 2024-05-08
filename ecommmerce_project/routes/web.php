<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/signup', function(){
    return view('signup');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/products', function () {
    return view('userProduct');
});

Route::get('/createUser', function() {
    return view('newUser');
});

Route::get('/profile', function(){
    return view('profile');
});

Route::resource('/employee', EmployeeController::class);

Route::get('/employeeInfo', 'App\Http\Controllers\EmployeeController@EmployeeInfo');

Route::resource('/products', ProductController::class);

Route::resource('/users', UserController::class);

Route::get('/admin_products','App\Http\Controllers\ProductController@addProduct');

Route::get('/profile_employee','App\Http\Controllers\EmployeeController@profileEmployee');

Route::get('/allUser','App\Http\Controllers\EmployeeController@alluserShow');

Route::get('/edit/{id}', 'App\Http\Controllers\EmployeeController@editInfo');

Route::post('/update-data/{id}','App\Http\Controllers\EmployeeController@updateData');

Route::get('/remove/{id}','App\Http\Controllers\EmployeeController@delete');
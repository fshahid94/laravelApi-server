<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employees/{id}', ['middleware'=> 'cors','uses'=> 'EmployeesController@show']);
Route::get('employees','EmployeesController@index');
//Route::get('/employees/{id}','EmployeesController@show');

Route::get('employees/test','EmployeesController@test');

Route::post('/employees', ['middleware'=> 'cors','uses'=> 'EmployeesController@store']);
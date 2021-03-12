<?php

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
    return view('chart');
});

//Data
Route::get('/data', 'DatasController@index');
//Route::get('/data/create', 'DatasController@create');
Route::get('/data/{data}/edit', 'DatasController@edit');
Route::patch('/data/{data}', 'DatasController@update');
Route::delete('/data/{data}', 'DatasController@destroy');

//Employee
//Route::get('/employee', 'EmployeesController@index');
//Route::get('/employee/create', 'EmployeesController@create');
//Route::get('/employee/{employee}', 'EmployeesController@show');
//Route::post('/employee', 'EmployeesController@store');
//Route::delete('/employee/{employee}', 'EmployeesController@destroy');
//Route::get('employee/{employee}/edit', 'EmployeesController@edit');
//Route::patch('employee/{employee}', 'EmployeesController@update');
Route::resource('employee', 'EmployeesController');

//Bendahara
Route::get('/bendahara', 'BendaharasController@index');
Route::get('/bendahara/show', 'BendaharasController@show');


//Sekretariat
Route::get('/sekretariat', 'SekretariatsController@index');
Route::get('/sekretariat/show', 'SekretariatsController@show');




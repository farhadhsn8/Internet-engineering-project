<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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




Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/employees','App\Http\Controllers\EmployeeController@index')->name('employee');
Route::get('/employees/create','App\Http\Controllers\EmployeeController@create')->name('employees.create');
Route::post('/employees/store','App\Http\Controllers\EmployeeController@store')->name('employees.store');
Route::get('/employees/edit/{emp}','App\Http\Controllers\EmployeeController@edit')->name('employees.edit');
Route::post('/employees/update/{emp}','App\Http\Controllers\EmployeeController@update')->name('employees.update');
Route::get('/employees/destroy/{emp}','App\Http\Controllers\EmployeeController@destroy')->name('employees.destroy');
Route::get('/employees/married','App\Http\Controllers\EmployeeController@married')->name('employees.married');
Route::get('/employees/lname','App\Http\Controllers\EmployeeController@lname')->name('employees.lname');
Route::get('/employees/age','App\Http\Controllers\EmployeeController@age')->name('employees.age');
Route::get('/employees/age/married','App\Http\Controllers\EmployeeController@age_married')->name('employees.age_married');
Route::get('/employees/married/number','App\Http\Controllers\EmployeeController@num_married')->name('employees.num_married');
Route::get('/employees/notmarried/number','App\Http\Controllers\EmployeeController@num_notmarried')->name('employees.num_notmarried');
Route::get('/employees/salary/number','App\Http\Controllers\EmployeeController@num_salary')->name('employees.num_salary');
Route::get('/employees/maxsalary','App\Http\Controllers\EmployeeController@max_salary')->name('employees.max_salary');
Route::get('/employees/minsalary','App\Http\Controllers\EmployeeController@min_salary')->name('employees.min_salary');
Route::get('/employees/sum_salary','App\Http\Controllers\EmployeeController@sum_salary')->name('employees.sum_salary');
Route::get('/employees/std_dev','App\Http\Controllers\EmployeeController@Stand_Deviation')->name('employees.std');





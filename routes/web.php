<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('companies', 'CompanyController');
Route::resource('employees', 'EmployeeController');
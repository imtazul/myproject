<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.pages.index');
});
Route::get('about-us', function () {
    return view('website.pages.about');
});
Route::get('services', function () {
    return view('website.pages.services');
});
Route::get('contact', function () {
    return view('website.pages.contact');
});
Route::get('admin/dashboard', function () {
    return view('admin.pages.dashboard');
});
Route::get('admin/login', function () {
    return view('admin.pages.login');
});
Route::get('admin/reg', function () {
    return view('admin.pages.reg');
});
Route::get('admin/tables', function () {
    return view('admin.pages.tables');
});




// Route::get('about-us', 'HomeController@about');

Route::get('employee-add', 'EmployeeController@add');

Route::post('store-employee', 'EmployeeController@store');

Route::get('employees', 'EmployeeController@all');

Route::get('edit-employee/{id}', 'EmployeeController@edit');

Route::post('update-employee/{id}', 'EmployeeController@update');

Route::get('delete-employee/{id}','EmployeeController@delete');

//authentication

Route::get('login','AuthController@login');

Route::post('loginstore','AuthController@loginstore');


Route::get('students','StudentController@all');

//image uploading
//3rd party package install(intervention)
Route::get('image','UploadController@viewpage');
Route::post('uploadimage','UploadController@store');
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('building', 'BaseSet\BuildingController@index');
Route::get('employee', 'BaseSet\EmployeeController@index');
Route::get('fee', 'BaseSet\FeeController@index');
Route::get('permission', 'BaseSet\PermissionController@index');
Route::get('import', 'ServiceCustomer\ImportController@index');
Route::get('pay', 'ServiceCustomer\PayController@index');
Route::get('searchfee', 'ServiceCustomer\SearchFeeController@index');
Route::get('repairapply', 'ServiceCustomer\RepairApplyController@index');
Route::get('repairvisit', 'ServiceCustomer\RepairVisitController@index');
Route::get('repairsearch', 'ServiceCustomer\RepairSearchController@index');
Route::get('repairperson', 'ProjectManage\RepairPersonController@index');
Route::get('repairassign', 'ProjectManage\RepairAssignController@index');
Route::get('repairfinish', 'ProjectManage\RepairFinishController@index');
Route::get('repairchart', 'Dashboard\RepairChartController@index');
Route::get('paychart', 'Dashboard\PayChartController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

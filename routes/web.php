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
    return view('welcome');
})->name('login');

Route::post('/login', 'LoginController@store');

Route::middleware('auth')
	->group(function() {
		Route::get('/dashboard', 'DashboardController@index');

		Route::get('/dashboard/equipment', 'DashboardController@showEquipments');
		Route::get('/dashboard/equipment/create', 'DashboardController@createEquipments');
		Route::post('/dashboard/equipment/store', 'DashboardController@storeEquipments');
		Route::get('/dashboard/equipment/delete/{id}', 'DashboardController@deleteEquipments');
		Route::get('/dashboard/equipment/edit/{id}', 'DashboardController@editEquipments');
		Route::post('/dashboard/equipment/update', 'DashboardController@updateEquipments');


		Route::get('/logout', 'LoginController@logout');

		Route::get('/changepassword','LoginController@showChangePasswordForm');

		Route::post('/changePassword','LoginController@changePassword')->name('changePassword');
		

	});
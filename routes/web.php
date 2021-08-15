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
    return view('welcome');
});

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/payment', 'PaymentController@index')->name('payment');
Route::get('/payment2', 'PaymentController@create')->name('payment2');
Route::post('/charge', 'PaymentController@charge');
Route::post('/charge2', 'PaymentController@charge2');

Route::get('/invitation', 'InvitationController@index')->name('invitation');
Route::get('/invitation2', 'InvitationController@create')->name('invitation2');
Route::post('invitation store','InvitationController@store')->name('invitation.store');
Route::post('invitation post','InvitationController@post')->name('invitation.post');

    Route::get('/dashboard2', function () {
    return view('vendor.dashboard');
    })->name('dashboard2');


Route::get('/one', 'OneController@index')->name('one-index');


Route::get('event index','EventController@index')->name('event.index');
Route::get('event index2','EventController@index2')->name('event.index2');
Route::get('/event-show/{id}','EventController@show')->name('event.show');
Route::get('/event2-show/{id}','EventController@show2')->name('event2.show');










Route::group(['middleware'=> ['auth','admin']],function(){

	Route::get('/dashboard', function () {
    return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/role-register', 'Admin\DashboardController@registered')->name('role-register');
    Route::get('/role-edit/{id}', 'Admin\DashboardController@registeredit')->name('role-edit');
    Route::delete('/role-delete/{id}', 'Admin\DashboardController@registerdelete')->name('role-delete');
    Route::post('/role-register-update/{id}', 'Admin\DashboardController@registerupdate')->name('role-register-update');
   
	Route::get('invitation show','InvitationController@show')->name('invitation.show');

   
    Route::get('payment show', 'PaymentController@show')->name('payment.show');


    Route::get('/event', 'EventController@create')->name('event.create');
    Route::post('event store','EventController@store')->name('event.store');
    
    Route::delete('/event-delete/{id}', 'EventController@destroy')->name('event.destroy');
    Route::get('/event-show/{id}','EventController@show')->name('event.show');
    Route::get('/event-edit/{id}', 'EventController@edit')->name('event.edit');

    Route::post('/event-update/{id}', 'EventController@update')->name('event.update');
   





    Route::get('/sms', 'BulkSmsController@index')->name('bulksms');
    Route::get('/bulksms', 'BulkSmsController@sendSms')->name('bulksend');


});


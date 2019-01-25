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
});

Route::get('/test', function () {

});

Route::get('/user', 'UserController@index');
Route::post('/user/register', 'UserController@register')->middleware('myMiddleware');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//Route::post('/bol', 'BolController@index')->name('bol');


Route::get('/bol', 'BolController@index');
Route::post('/bol', 'BolController@creatBol')->name('bol.insert');



Route::get('/good', 'goodController@index')->name('good');

Route::get('/customer', 'customerController@index');
Route::post('/customer', 'customerController@creatCustomer')->name('usagefactor.insert');

Route::get('/usagefactor', 'UsagefactorController@index');
Route::post('/usagefactor', 'UsagefactorController@creatUsagefactor')->name('usagefactor.insert');

Route::get('/tell', 'TellController@index');
Route::post('/tell', 'Tell@creatTell')->name('tell.insert');

Route::get('/driver', 'DriverController@index');
Route::post('/driver', 'Driver@creatDriver')->name('driver.insert');

Route::get('/document', 'DocumentController@index');
Route::post('/document', 'Document@creatDocument')->name('document.insert');


Route::get('/employee', 'EmployeeController@index');
Route::post('/employee', 'Employee@creatEmployee')->name('employee.insert');


Route::get('/reseaver', 'ReseaverController@index');
Route::post('/reseaver', 'Reseaver@creatReseaver')->name('reseaver.insert');



Route::get('/sender', 'SenderController@index');
Route::post('/sender', 'Sender@creatSender')->name('sender.insert');



Route::get('/store', 'storeController@index');
Route::post('/store', 'store@creatStore')->name('store.insert');
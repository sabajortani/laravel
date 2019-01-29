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
Route::get('/bol/edit/{id}', 'BolController@edit')->name('bol_edit');
Route::post('/bol/update/{id}', 'BolController@update')->name('bol.update');
Route::get('/bol/delete/{id}', 'BolController@delete')->name('bol_delete');
Route::get('/bol/show-all', 'BolController@showAll')->name('bol.show.all');



Route::get('/good', 'goodController@index')->name('good');
Route::post('/good/good', 'GoodController@creatBol')->name('good.insert');
Route::get('/good/edit/{id}', 'GoodController@edit')->name('good.edit');
Route::post('/good/update/{id}', 'GoodController@update')->name('good.update');
Route::get('/good/delete/{id}', 'GoodController@delete')->name('good.delete');
Route::get('/good/show-all-good', 'GoodController@showAll')->name('good.show.all');




//Route::get('/customer', 'CustomerController@index')->name('customer');

Route::post('/customer', 'CustomerController@insert')->name('customers.insert');
Route::get('/customer/edit/{id}', 'CustomerController@edit')->name('customers_edit');
Route::post('/customer/update/{id}', 'CustomerController@update')->name('customers.update');
Route::get('/customer/delete/{id}', 'CustomerController@delete')->name('customers_delete');
Route::get('/customer/show-all', 'CustomerController@showAll')->name('customers.show.all');




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
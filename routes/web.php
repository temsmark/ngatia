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

    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('banned');

Route::group(['prefix'=>'users','as'=>'user.','middleware'=>['auth','banned']],function (){
    Route::post('user/create','UserController@store')->name('create');
    Route::get('user/{user}','UserController@edit')->name('edit');
    Route::delete('user/{user}','UserController@destroy')->name('delete');
    Route::patch('user/{user}','UserController@update')->name('update');

});

Route::get('acl','UserController@acl')->name('acl');
Route::post('role','UserController@role')->name('roles');
Route::post('permission','UserController@permission')->name('permission');


Route::get('profile',function (){
    return view('shared.profile');
});

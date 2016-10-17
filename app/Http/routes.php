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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function(){
	Route::auth();
	Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => ['web']], function () {
    //Login Routes...
    Route::get('/admin/login','AdminAuth\AuthController@showLoginForm');
    Route::post('/admin/login','AdminAuth\AuthController@login');
    Route::get('/admin/logout',['uses' => 'AdminAuth\AuthController@logout', 'as' => 'admin.logout']);

    // Registration Routes...
    Route::get('admin/register', 'AdminAuth\AuthController@showRegistrationForm');
    Route::post('admin/register', 'AdminAuth\AuthController@register');

    Route::post('admin/password/email','AdminAuth\PasswordController@sendResetLinkEmail');
    Route::post('admin/password/reset','AdminAuth\PasswordController@reset');
    Route::get('admin/password/reset/{token?}','AdminAuth\PasswordController@showResetForm');

    Route::get('/admin', ['uses' => 'AdminController@index', 'as' => 'admin.home']);

});

Route::group(['prefix'=>'user'], function() {
    Route::get('/create', [
        'as' => 'admin.create.user',
        'middleware' => ['admin'],
        'uses' => 'AdminController@createUser'
    ]);

    Route::post('/store', [
        'as' => 'admin.store.user',
        'middleware' => ['admin'],
        'uses' => 'AdminController@storeUser'
    ]);

    Route::get('/view-all', [
        'as' => 'admin.user.index',
        'middleware' => ['admin'],
        'uses' => 'AdminController@viewUsers'
    ]);

    Route::get('/user-info/{num}', [
        'as' => 'admin.user.info',
        'middleware' => ['admin'],
        'uses' => 'AdminController@viewUsersInfo'
    ]);

    Route::get('/edit/{num}', [
        'as' => 'admin.user.edit',
        'middleware' => ['admin'],
        'uses' => 'AdminController@editUser'
    ]);

    Route::post('/update/{num}', [
        'as' => 'admin.user.update',
        'middleware' => ['admin'],
        'uses' => 'AdminController@updateUser'
    ]);
});

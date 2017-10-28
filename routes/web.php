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

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/dashboard', 'DashboardController@home')->middleware('auth');

/**
 * Middleware has stored in kernel.php (/app/Http/Middleware)
 */
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'auth.admin']], function () {
    Route::resource('users', 'UserController');
    //Route::get('/users/create', 'UserController@create');

});

Route::get('/logout', 'Auth\LoginController@logout');

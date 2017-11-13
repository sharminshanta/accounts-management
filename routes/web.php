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

// Default Route (Login route)
Route::get('/', 'Auth\LoginController@showLoginForm');
// User Authentication route
Route::post('/login', 'Auth\LoginController@login');

//Show sign up form route
Route::get('/signup', 'PublicAuthController@showSignupForm');
//Sign up form post route
Route::post('/signup', 'PublicAuthController@store');

/**
 * Dashboard Route
 * Middleware has stored in kernel.php (/app/Http/Middleware)
 */
Route::get('/dashboard', 'DashboardController@home')->middleware('auth');

/**
 * Admin Route
 * Middleware has stored in kernel.php (/app/Http/Middleware)
 */
Route::group(['prefix' => 'admin', 'middleware' => ['auth.admin']], function () {
    Route::resource('users', 'UserController');
});

//Logout Route
Route::get('/logout', 'Auth\LoginController@logout');

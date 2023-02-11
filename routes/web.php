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

Route::get('/', 'IndexController@index')->name('index');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::resource('/products', 'ProductController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/users', 'UserController');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', 'UserController@create')->name('register');
    Route::post('/register', 'UserController@store')->name('register.store');
    Route::get('/login', 'UserController@loginForm')->name('login');
    Route::post('/login', 'UserController@login')->name('login.store');

    Route::get('/forgot-password', 'UserController@forgotPassword')->name('forgot.password');
    Route::post('/forgot-password', 'UserController@forgotPasswordUpdate')->name('password.update');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'UserController@logout')->name('logout');

    Route::get('/products/{id}/{user}', 'CartController@addCartToDb')->name('product.add.cart');
    Route::get('/products-cart-show', 'CartController@showCart')->name('show.cart');
    Route::get('/products-cart-delete/{id}', 'CartController@deleteCart')->name('delete.cart');

    Route::get('/subscribe', 'SubscriberController@index')->name('subscribe')->middleware('subscriber');
    Route::post('/subscribe', 'SubscriberController@store')->name('subscribe.store')->middleware('subscriber');

    Route::get('/favorites', 'FavoritesController@index')->name('favorites');
    Route::get('/favorites/{id}/{user}', 'FavoritesController@addToFavorites')->name('favorites.add');

});

Route::get('/products', 'ProductController@index')->name('show.products');
Route::get('/product/{slug}', 'ProductController@show')->name('show.single.product');

Route::get('/test', 'ProductController@test')->name('test');





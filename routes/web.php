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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'Controller@switchLang']);

Route::get('/', ['as'=>'home1', 'uses'=>'Controller@home']);
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group([
    'middleware' => ['web', 'auth:admin'], //you need to add the last middleware to array to fix it (version < v.1.0.6)
    'prefix' => 'admin',
    
    
], function () {

   Route::resource('contents','ContentController');
   Route::resource('products','ProductController');
   Route::resource('categories','CategoryController');
   Route::resource('galleries','GalleryController');
   Route::resource('banners','BannerController');
   Route::resource('image','ImageController');
   
   Route::get('/images/{product}', ['as'=>'product.images', 'uses'=>'ImageController@add_photos']);
   Route::get('/gallery/images/{gallery}', ['as'=>'gallery.images', 'uses'=>'ImageController@gallery_photos']);
   Route::get('/caegpry/{id}', ['as'=>'products.category', 'uses'=>'ProductController@single_category']);
   Route::post('/products/search', ['as'=>'admin.product.search', 'uses'=>'ProductController@product_search']);

});

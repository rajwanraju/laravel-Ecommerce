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

Route::get('/','WelcomeController@index');


Route::get('/category-view/{id}','WelcomeController@category');
Route::get('/offers','WelcomeController@offers');
Route::get('/contact','WelcomeController@contact');
Route::get('/product-details/{id}','WelcomeController@ProductDetails');
Route::auth();

Route::get('/dashboard', 'HomeController@index');



Route::get('/checkout', 'CheckoutController@index');
Route::post('/checkout/sign-up', 'CheckoutController@customerRegistration');
Route::get('/checkout/shipping', 'CheckoutController@showShippingForm');
Route::post('/checkout/save-shipping', 'CheckoutController@saveShippingInfo');
Route::get('/checkout/payment', 'CheckoutController@showPaymentForm');
Route::post('/checkout/save-order', 'CheckoutController@saveOrderInfo');
Route::get('/checkout/my-home', 'CheckoutController@customerHome');







Route::post('/search','WelcomeController@search');


/*cart*/
Route::post('/cart/add', 'CartController@addToCart');
Route::get('/cart/show', 'CartController@showCart');
Route::get('/cart/delete/{id}', 'CartController@deleteCartProduct');



/*category info*/


Route::group(['middleware'=>'AuthenticateMiddleware'],function(){


Route::get('/category/add', 'CategoryController@createCategory');
Route::post('/category/save', 'CategoryController@storeCategory');
Route::get('/category/manage', 'CategoryController@manageCategory');
Route::get('/category/edit/{id}', 'CategoryController@editCategory');
Route::post('/category/update', 'CategoryController@updateCategory');
Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');
Route::get('/category/view', 'CategoryController@viewCategory');

/*manufacturer info*/
Route::get('/manufactur/add', 'ManufacturController@createManufactur');
Route::post('/manufactur/save', 'ManufacturController@storeManufactur');
Route::get('/manufactur/manage', 'ManufacturController@manageManufactur');
Route::get('/manufactur/edit/{id}', 'ManufacturController@editManufactur');
Route::post('/manufactur/update', 'ManufacturController@updateManufactur'); 
Route::get('/manufactur/delete/{id}', 'ManufacturController@deleteManufactur');

/*Product info*/
Route::get('/product/add', 'ProductController@createProduct');
Route::post('/product/save', 'ProductController@storeProduct');
Route::get('/product/manage', 'ProductController@manageProduct');
Route::get('/product/view/{id}', 'ProductController@viewProduct');
Route::get('/product/edit/{id}', 'ProductController@editProduct');
Route::post('/product/update', 'ProductController@updateProduct')->name('product.update');
Route::get('/product/delete/{id}', 'ProductController@deleteProduct');
Route::get('/product/image/add/{id}', 'ProductController@ProductImageAdd');
Route::post('/product/image/save', 'ProductController@ProductImageStore');




 Route::get('/user/manage', 'UserController@manageUser');

});


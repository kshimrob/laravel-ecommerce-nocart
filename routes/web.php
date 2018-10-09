<?php

Route::get('/', 'LandingPageController@index')->name('landing-page');

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/checkout/{product}', 'CheckoutController@show')->name('checkout.show');
Route::post('/checkout', 'CheckoutController@chargeCreditCard')->name('checkout.store');

Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');

Route::get('/post/{slug}', 'PostController@show')->name('post.show');
Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{slug}', 'PostCategoryController@show')->name('postcategory.show');

Route::get('/causecheckout', 'CauseCheckoutController@index')->name('causecheckout.index');
Route::get('/causecheckout/{slug}', 'CauseCheckoutController@show')->name('causecheckout.show');

Route::get('/export', 'Voyager\ProductsController@exportFile');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'ShopController@search')->name('search');

Route::get('/search-algolia', 'ShopController@searchAlgolia')->name('search-algolia');

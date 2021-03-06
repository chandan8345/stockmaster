<?php
//Product Section
Route::get('/product','productController@index');
Route::get('/Settings','productController@cbu');
Route::get('/stock','productController@stock');
Route::post('/storeProduct','productController@store');
Route::post('/stocksearch','productController@stocksearch');
Route::post('/updateProduct','productController@updateProduct');
Route::post('/deleteProduct','productController@deleteProduct');
Route::post('/updateCategory','productController@updateCategory');
Route::post('/updateBrand','productController@updateBrand');
Route::post('/updateUnit','productController@updateUnit');
Route::post('/addCategory','productController@addCategory');
Route::post('/addBrand','productController@addBrand');
Route::post('/addUnit','productController@addUnit');

//Purchase Section
Route::get('/purchase','purchaseController@index');
Route::post('/searchProduct','purchaseController@searchProduct');

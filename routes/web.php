<?php
Route::get('/product','productController@index');
Route::get('/stock','productController@stock');
Route::post('/storeProduct','productController@store');
Route::post('/stocksearch','productController@stocksearch');
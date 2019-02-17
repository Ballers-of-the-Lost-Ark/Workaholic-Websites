<?php
// Pages
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/home', 'PagesController@index');

Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'ContactController@contact');
<?php
use Spatie\Sitemap\SitemapGenerator;

// Pages
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/home', 'PagesController@index');
Route::get('/terms', 'PagesController@terms');

Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'ContactController@contact');

// Sitemap
Route::get('sitemap', function(){
    SitemapGenerator::create(env('APP_URL'))->writeToFile('sitemap.xml');
    return 'Sitemap generated';
});
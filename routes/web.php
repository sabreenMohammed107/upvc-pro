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



Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', 'Web\IndexController@index');
	
	Route::post('/send-letter', 'Web\IndexController@sendLetter');
	//contact us
	Route::get('/contact-us', 'Web\ContactController@index')->name('contact-us');
	Route::post('/contact-message', 'Web\ContactController@sendMessage');
	//parteners
	Route::get('/parteners', 'Web\PartenerController@index')->name('parteners');
	Route::get('fetch_partener_data', 'Web\PartenerController@fetch_data');
	//gallery
	Route::get('/gallery', 'Web\GalleryController@index')->name('gallery');
	//about_us
	Route::get('/about_us', 'Web\AboutUsController@index')->name('about_us');
//blogs
Route::get('/blogs', 'Web\BlogController@index')->name('blogs');
Route::get('/single-blog/{id}', 'Web\BlogController@singleBlog');	
//product
Route::get('/products', 'Web\ProductController@index')->name('products');
Route::get('/single-product/{id}', 'Web\ProductController@singleProduct');	
});


<?php

// Auth Routes

use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function (){

	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Auth::routes();
	Route::get('/admin', 'HomeController@index')->name('admin');

     // Route::get('/logout', function(){
     //      \Auth::logout();
     //      return redirect ("login");
     //  });

     });/** End group**/



Route::namespace('Admin')->group(function () {
//this route with auth

Route::group(
    [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => [ 'auth' ]
    ], function(){

     /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

        //-------------------------User Screen
     //    Route::resource('/AdminUser', UserController::class);
       //-------------------------Client Screen
        Route::resource('/AdminClient', ClientController::class);
        //-------------------------Company Screen
        Route::resource('/AdminCompany', CompanyController::class);
        //-------------------------Contact Screen
        Route::resource('/AdminContact', Contact_messageController::class);
        //-------------------------Home Slider Screen
        Route::resource('/AdminHomeSlider', Home_sliderController::class);
         //-------------------------Home Slider Screen
         Route::resource('/AdminHomeVedio', Home_vedioController::class);
          //-------------------------Image Gallery Screen
          Route::resource('/AdminImageGallery', Image_galleryController::class);
          //-------------------------Vedio Gallery Screen
          Route::resource('/AdminVedioGallery', Vedio_galleryController::class);
          //-------------------------Feedback Screen
          Route::resource('/AdminFeedback', FeedbackController::class);
           //-------------------------Material Screen
           Route::resource('/AdminMaterial', MaterialController::class);
           //-------------------------Material Screen
           Route::resource('/AdminMaterial', MaterialController::class);
           //-------------------------NewsLetter Screen
           Route::resource('/AdminNewsLetter', News_letterController::class);
           //-------------------------Supplier Screen
           Route::resource('/AdminSupplier', SupplierController::class);
           //-------------------------Supplier Screen
           Route::resource('/AdminUpvcNumber', Upvc_numberController::class);
           //-------------------------Why Company Screen
           Route::resource('/AdminWhyCompany', Why_companyController::class);
           //-------------------------Blog Screen
           Route::resource('/AdminBlog', BlogController::class);
           //-------------------------BlogTag Screen
           Route::resource('/AdminBlogTag', Blogs_tagController::class);
           //-------------------------Product Screen
           Route::resource('/AdminProduct', ProductController::class);
           //-------------------------Product Category Screen
           Route::resource('/AdminProductCategory', Product_categoryController::class);
            //-------------------------Company Performance Screen
           Route::resource('/AdminCompanyPerformance', Company_performanceController::class);
            //-------------------------Company Product Images Screen
            Route::resource('/AdminProductImages', Product_imgController::class);
             //-------------------------Company Product Key Feature Screen
           Route::resource('/AdminProductKeyFeature', Product_key_featureController::class);

    }); /** End  **/


    //this route without auth
     Route::group(['prefix' => LaravelLocalization::setLocale()], function()
     {
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/



     });/** End group**/





});/** End  Route**/

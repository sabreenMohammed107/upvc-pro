<?php

// Auth Routes
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
     {
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Auth::routes();
	Route::get('/home', 'HomeController@index')->name('home');
   
// Route::get('/Admin', function(){
//     return redirect ("login");
// });
// Route::get('/', function(){
//     return redirect ("index");//add index webpage 
// });
// Route::get('/home', function(){
//     return redirect ("login");
// });
Route::get('/logout', function(){
    return redirect ("login");
});
    
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
        Route::resource('/AdminUser', UserController::class);
       //-------------------------Client Screen
        Route::resource('/AdminClient', ClientController::class);
        //-------------------------Company Screen
        Route::resource('/AdminCompany', ClientController::class);

    }); /** End  **/

    
    //this route without auth
     Route::group(['prefix' => LaravelLocalization::setLocale()], function()
     {
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    
     

     });/** End group**/

    
    
   

});/** End  Route**/
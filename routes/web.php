<?php

// Route::get('/','LatihanController@index');
 // Route::get('/','LatihanController@welcome');

// Route::get('coba','CobaController@coba');


Route::get('/',function() {
   return view('welcome');
});

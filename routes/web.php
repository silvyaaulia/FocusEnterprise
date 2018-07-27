<?php

/*HOMEPAGE*/
Route::get('/home', function () {
    return view('blog/home');
});

//ABOUT US
Route::get('/contactus', function () {
    return view('blog/contactus');
});


//POST
Route::get('/post', function () {
    return view('blog/post');
});
//Route::get('/post', 'BlogController@index');
//Route::get('/post/{id}', 'BlogController@show');


//MEDIA HEADING
Route::get('/mediaheading', function () {
    return view('blog/mediaheading');
});


//PAKET
Route::get('/paket', function () {
    return view('blog/paket');
});


/*EVENTS
Route::get('/', function () {
    return view('event-list');
});

Route::get('/', function () {
    return view('event-day');
});
*/

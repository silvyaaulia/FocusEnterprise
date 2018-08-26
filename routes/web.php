<?php

/*HOMEPAGE*/
Route::get('/', function () {
    return view('blog/home');
});
//ABOUT US
Route::get('/contactus', function () {
    return view('blog/contactus');
});
//EVENTS
Route::get('/events', function () {
    return view('blog/events');
});
//POST
Route::get('/events/post', function () {
    return view('blog/events/post');
});

//Route::get('/post', 'BlogController@index');
//Route::get('/post/{id}', 'BlogController@show');


//MEDIA HEADING
Route::get('/mediaheading', function () {
    return view('blog/mediaheading');
});

//PAKET
Route::get('/paket', function () {
    return view('blog/paket/Paket-A');
});

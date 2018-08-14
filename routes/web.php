<?php

/*HOMEPAGE*/
Route::get('/home', function () {
    return view('blog/home');
});

Route::get('/homeb', function () {
    return view('blog/homeb');
});

//ABOUT US
Route::get('/contactus', function () {
    return view('blog/contactus');
});
Route::get('/contactusb', function () {
    return view('blog/contactusb');
});

//POST
Route::get('/post', function () {
    return view('blog/post');
});
Route::get('/postb', function () {
    return view('blog/postb');
});
//Route::get('/post', 'BlogController@index');
//Route::get('/post/{id}', 'BlogController@show');


//MEDIA HEADING
Route::get('/mediaheading', function () {
    return view('blog/mediaheading');
});
Route::get('/mediaheadingb', function () {
    return view('blog/mediaheadingb');
});

//PAKET
Route::get('/paket', function () {
    return view('blog/paket');
});
Route::get('/paketb', function () {
    return view('blog/paketb');
});

//EVENTS
Route::get('/events', function () {
    return view('blog/events');
});
Route::get('/eventsb', function () {
    return view('blog/eventsb');
});

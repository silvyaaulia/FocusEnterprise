<?php

/*HOMEPAGE*/
Route::get('/home', function () {
    return view('blog/home');
});

Route::get('/homeb', function () {
    return view('blog/homeb');
});
/*HOMEPAGE*/
Route::get('/homenew', function () {
    return view('blog/homenew');
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
Route::get('/contactusnew', function () {
    return view('blog/contactusnew');
});

//POST
Route::get('/post', function () {
    return view('blog/post');
});

Route::get('/postb', function () {
    return view('blog/postb');
});
Route::get('/postnew', function () {
    return view('blog/postnew');
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
Route::get('/mediaheadingnew', function () {
    return view('blog/mediaheadingnew');
});

//PAKET
Route::get('/paket', function () {
    return view('blog/paket');
});
Route::get('/paketb', function () {
    return view('blog/paketb');
});
Route::get('/paketnew', function () {
    return view('blog/paketnew');
});

//EVENTS
Route::get('/events', function () {
    return view('blog/events');
});
Route::get('/eventsb', function () {
    return view('blog/eventsb');
});
Route::get('/eventsnew', function () {
    return view('blog/eventsnew');
});

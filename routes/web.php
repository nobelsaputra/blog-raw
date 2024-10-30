<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'HOME PAGE']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'nobel', 'title' => 'ABOUT PAGE']);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'BLOG PAGE']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'CONTACT PAGE']);
});

// buat 2 rute baru
// 1. /blog
// 2 buah artikel, judul dan isi
//2. /contact
// email / social media
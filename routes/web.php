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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Veronika Arisetyo Kinasih",
        "email" => "3103120226@student.smktelkom-pwt.sch.id",
        "gambar" => "klee.jpg"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery');
});
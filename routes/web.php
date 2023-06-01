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
    $name= 'Pietro';
    $surname= 'Muresu';
    return view('home', compact('name', 'surname'));
})->name('home');


Route::get('/about-us', function(){
    return view('about-us');
})->name('about-us');


Route::get('/contacts', function(){
    $contacts = [
        "Phone" => "+39 403 324 2344",
        "Email" => "primi9passi@gmail.com",
        "PEC"   => "primi9passi@pec.it"
    ];

    return view('contacts', compact('contacts'));
})->name('contacts');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $person = [
    //     "name" => "jovis",
    //     "email"=> "123@gmail.com",
    // ];
    // dd($person);
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});

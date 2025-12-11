<?php

use App\Http\Controllers\calculateController;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $person = [
    //     "name" => "jovis",
    //     "email"=> "123@gmail.com",
    // ];
    // dd($person);
    return view('welcome');
});

// rendering basic view pages
Route::view('/about', 'about');

// how to get required  parameters from routes
Route::get('first/{val1}/second/{val2}', function(float $val1, float $val2) {
    return $val1 + $val2;
})->whereNumber(['a', 'b']);

// how to get optional parameters (?)
Route::get('/product/{category?}', function(?string $category = null) {
        return 'this is category id =' . $category;
});
// redirecting routes
Route::redirect('/hello', '/about', 301);

// route group(prefix)
Route::prefix('admin')->group(function() {

    Route::get('/userr', function() {
        return "you are an admin user";
    });
});

// fallback
Route::fallback(function(){
    return 'page not found buddy';
});

Route::controller(calculateController::class)->group(function () {
    Route::get('/sum/{a}/{b}', 'sum')->whereNumber(['a', 'b']);
    Route::get('/subtract/{a}/{b}', 'subtract')->whereNumber(['a', 'b']);
});

Route::get('/hello', [HelloController::class, 'welcome']);
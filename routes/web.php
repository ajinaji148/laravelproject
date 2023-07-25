<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScopeController;
use App\Http\Controllers\contactController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['auth'])->group(function(){
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/contact', function () {
        return view('contact');
    });


    
});

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/login', function () {
    return view('login');
});
// Route::get('/about', function () {
//     return view('about');
// });
Route::post('/submit',[ScopeController::class,"submit"]);
Route::post('/login',[ScopeController::class,"login"]);
Route::get('/logout',[ScopeController::class,"logout"]);
Route::post('/contact',[contactController::class,"contact"]);






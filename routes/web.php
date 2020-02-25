<?php

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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    }else {
        return redirect()->route('login');
    }
    // return view('welcome');
});

Auth::routes([
    'register' => false
]);

// Route::get('/home', 'HomeController@index')->name('home');

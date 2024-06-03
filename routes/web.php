<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // return view('welcome');
    // return 'Main Page';
    return view('index', [
        'name' => 'Nazrin'
    ]);

});

Route::get('/xxx', function () {
    return 'Hello';
})->name('hello');

Route::get('/hallo', function () {
    // return redirect('/hello');
    return redirect()->route('hello'); // pointing to the route's name
});

Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name . '!';
});

// fallback
Route::fallback(function () {
    return 'Still got somewhere!';
});
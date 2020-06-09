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
$examples = [
    'smooth-scroll',
    'context-menu',
    'conditional-visibility',
    'modal',
    'confirmation-button'
];
collect($examples)->each(function ($uri) {
    Route::get($uri, function () use ($uri) {
        return view($uri);
    });
});

Route::get('/', function () {
    return view('welcome');// connect to blade
});
Route::get('scroll', function () {
    return view('smooth-scroll');
});
Route::get('create', function () {
    return view('conditional-visibility');
});
Route::get('modal', function () {
    return view('modal');
});
Route::get('confirm', function () {
    return view('confirmation-button');
});
Route::post('confirmation-button', function () {
    return 'Form Submitted';
});
Route::get('tabs', function(){
    return view('tabs');
});


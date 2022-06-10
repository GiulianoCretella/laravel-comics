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
    $headerItems= config('header');
    $comics = config('comics');
    $upfooter = config('upfooter');
    return view('home',['comics'=>$comics, 'headerItems'=>$headerItems, 'upfooter'=>$upfooter]);
})->name('home');
Route::get('/singleComic', function () {
    $headerItems= config('header');
    $upfooter = config('upfooter');
    return view('singleComic',['headerItems'=>$headerItems,'upfooter'=>$upfooter]);
})->name('singleComic');


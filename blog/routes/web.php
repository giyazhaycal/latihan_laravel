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

Route::get('/', function () {
    return view('welcome');
});

// Url ini bertipe GET yg bisa diakses dengan localhost:8000/dashboard, kemudian URL ini akan diarahkan ke dalam function index yg ada di dalam file DashboardController << kira kira gini bacanya
Route::get('dashboard', 'DashboardController@index');

// kalo kategori nanti sudah berbentuk sebuah modul (ada create, read, update, delete, kalian bisa bikin KategoriController, dan memang sudah sewajarnya begitu)
Route::get('kategori', 'DashboardController@kategori'); // jangan di ikutin, typo adalah kebodohan

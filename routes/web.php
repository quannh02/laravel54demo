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

Route::get('thongtin', 'WelcomController@showinfo');
Route::get('thongtin/{monhoc}/{thoigian}', function ($monhoc, $thoigian){
    return 'Day la khoa hoc lap trinh ' . $monhoc . ' '  . $thoigian;
});

Route::get('mon-an/{mon_an?}', function ($mon_an = 'KFC'){
    return $mon_an;
});

Route::get('thong-tin/{hoten}/{sodienthoai}', function ($hoten, $sodienthoai){
    return $hoten . ' ' . $sodienthoai;
})->where(['hoten' => '[a-zA-Z]+', 'sodienthoai' => '[0-9]{9,10}']);
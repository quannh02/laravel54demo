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

Route::get('call-view', function(){
    $hoten = 'Nguyen Hong Quan';
    $view = 'call view';
    return view('view', compact('hoten','view'));
});

Route::get('test-controller', 'WelcomController@testAction');
Route::get('ho-chi-minh', ['as' => 'hcm', function() {
    return 'Ho Chi Minh dep lam ban oi';
}]);

Route::group(['prefix' => 'thuc-don'], function(){
    Route::get('bun-bo', function(){
        echo 'day la trang bun bo';
    });
    Route::get('bun-moc', function(){
        echo 'day la trang bun moc';
    });
    Route::get('bun-mam', function(){
        echo 'day la trang bun mam';
    });
});

Route::get('goi-view', ['as' => 'goi_view', function() {
    return view('layout.sub.view');
}]);

Route::get('goi-layout', ['as' => 'goi_layout', function() {
    return view('layout.sub.layout');
}]);


View::share('title', 'Lap trinh laravel 5x');
View::composer(['layout.sub.layout','layout.sub.view'], function($view){
    return $view->with('thongtin', 'Day la trang ca nhan');
});

Route::get('check-view', function(){
    if (view()->exists('layout.sub.layout1')) {
        return 'Ton tai view';
    } else {
        return 'Ko ton tai view';
    }
});
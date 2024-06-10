<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logosFootersController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Jongdongnew;
use App\Http\Controllers\AuthController;



Route::get('/dashborad', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');


Route::resource('/logoFooter', logosFootersController::class);
Route::resource('/banner', BannerController::class);
Route::resource('/new', NewsController::class);


Route::controller(AuthController::class)->group(function(){
    Route::get('/login','Login')->name('login');
    Route::get('/Register','Register')->name('Register');
    Route::post('/authenticate','authenticate')->name('authenticate');
    Route::post('/storeRegister','storeRegister')->name('storeRegister');
    Route::post('/logout','logout')->name('logout');
   
});


Route::controller(Jongdongnew::class)->group(function(){
    Route::get('/','Index')->name('index');
    Route::get('/header','Header')->name('header');
    Route::get('/news-details/{id}','NewsDetails')->name('news.details');
    Route::get('/search','Search')->name('search');
    Route::get('/contact','Contact')->name('contact');
    Route::get('/LatestNews','LatestNews')->name('LatestNews');
    Route::get('/Finance','Finance')->name('Finance');
    Route::get('/StartBusiness','StartBusiness')->name('StartBusiness');
});
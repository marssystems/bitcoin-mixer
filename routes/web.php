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

Route::group([
  'prefix' => '{locale}', 
  'where' => ['locale' => '[a-zA-Z]{2}'], 
  'middleware' => 'locale'], function() {

  Route::get('/', function () {
      return view('welcome');
  })->name('home');

  Route::get('/blog', function () {
      return view('blog');
  })->name('blog');

  Route::get('/fees', function () {
      return view('fees');
  })->name('fees');

  Route::get('/faq', function () {
      return view('faq');
  })->name('faq');

  Route::get('/referral', function () {
      return view('referral');
  })->name('referral');

  Route::get('/start-mixing-3', function () {
      return view('start-mixing-3');
  })->name('start.mixing');

  // Route::get('/start-mixing', function () {
  //     return view('start-mixing');
  // })->name('start.mixing.3');

  Route::get('/whymix', function () {
      return view('whymix');
  })->name('whymix');


  Route::get('/confirm-order/{address}', 'StartMixingController@showQrPage')->name('qr.order');

});

Route::post('/create-order', 'StartMixingController@createOrder')->name('create.order');
Route::post('/confirm-order', 'StartMixingController@confirmOrder')->name('confirm.order');
Route::post('/check-order', 'StartMixingController@checkOrder')->name('check.order');
Route::post('/send-mail', 'StartMixingController@mail')->name('send.email');

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Auth::routes([
  'register' => false, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/admin', 'HomeController@index')->name('admin');

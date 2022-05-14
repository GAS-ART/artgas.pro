<?php

use Illuminate\Support\Facades\App;
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

Route::get('/locale/{locale}',  'App\Http\Controllers\LanguagesController@changeLocale')->name('locale');
Route::post('feedback', 'App\Http\Controllers\ContactController@feedBackForm')->name('contactForm');

Route::get('/', function () {App::setLocale('ua'); return view('home');})->name('index');
Route::get('/ua', function () {App::setLocale('ua'); return  redirect('/');});

Route::get('/{locale}', function ($locale) {
   
   if (! in_array($locale, ['ua', 'en', 'ru'])) { 

      abort(404);

   } else if ($locale == 'ua') {

      App::setLocale('ua');
      return view('home');

   } else if ($locale == 'en') {

      App::setLocale('en');
      return view('home');

   }
   else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('home');

 }
})->name('home.lang');


Route::get('/{locale}/test', function ($locale) {
   
   if (! in_array($locale, ['ua', 'en', 'ru'])) { 

      abort(404);

   } else if ($locale == 'ua') {

      App::setLocale('ua');
      return view('home');

   } else if ($locale == 'en') {

      App::setLocale('en');
      return view('home');

   }
   else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('home');

 }
})->name('test.lang');

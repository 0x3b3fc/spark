<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;

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

Route::get('/', 'BlogController@indexView')->name('welcome');

Auth::routes(['register' => false]);

Route::get('/404',function (){
    return view('errors.404');
})->name('404');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/home/users','UserController')->middleware('auth');

Route::resource('/home/blog','BlogController',['except' => ['show']])->middleware('auth');

Route::get('/blog/{id}',[BlogController::class,'show'])->name('blog.view');

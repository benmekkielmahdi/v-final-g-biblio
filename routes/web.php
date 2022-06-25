<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\OeuvreController;
use App\Http\Controllers\CategoryController;

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

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/manager', 'ManagerController@index')->name('manager')->middleware('manager');
Route::get('/user', 'UserController@index')->name('user')->middleware('user');

Route::get('/books', 'LivreController@index')->name('books');

Route::get('/books/{id}', 'LivreController@bookdetails')->name('bookdetails');

Route::get('/categories/{id}', 'LivreController@viewByCategory')->name('voirparcategorie');

Route::resource('Rapport','RapportController');


Route::middleware(['auth','admin'])->group(function(){
  Route::resource('Oeuvre','OeuvreController');
  Route::resource('Category','CategoryController');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



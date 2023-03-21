<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\moviesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('/', moviesController::class);
Route::controller(moviesController::class)->group(function (){ 
    Route::get('/', 'index')->name('index');
    Route::post('/create', 'create')->name('create');
    Route::post('/update', 'update')->name('update');
    Route::delete('/delete/{id}', 'delete')->name('delete');
    Route::post('/edit', 'edit')->name('edit');
});
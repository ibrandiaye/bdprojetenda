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

/*Route::get('/', function () {
    return view('welcome');
})->name('home');*/
Route::resource('/type', TypeController::class)->middleware('auth');
Route::resource('/appel', AppelController::class)->middleware('auth');
Route::resource('/employe', EmployeController::class)->middleware('auth');
Route::resource('/matrice', MatriceController::class)->middleware('auth');
Route::get('/', 'Home1Controller@home')->name('home')->middleware('auth');
Route::resource('/document', DocumentController::class)->middleware('auth');


Auth::routes();

Route::get('/home', 'Home1Controller@home')->name('home')->middleware('auth');

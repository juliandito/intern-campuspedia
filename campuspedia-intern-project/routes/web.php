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

// Route::get('/', function () {
//     return view('kampus');
// });
Route::get('/', 'App\Http\Controllers\KampusController@viewKampus');

Route::get('/banding', 'App\Http\Controllers\KampusController@viewCompare');

Route::post('/comparison', 'App\Http\Controllers\KampusController@comparison');

Route::get('/tambah', function () {
    return view('tambah');
});
Route::get('/edit/{id}', 'App\Http\Controllers\KampusController@edit');

Route::get('/edit/{id}', 'App\Http\Controllers\KampusController@edit');

Route::post('/store', 'App\Http\Controllers\KampusController@store');

Route::patch('/update/{id}', 'App\Http\Controllers\KampusController@update');

Route::delete('/delete/{id}', 'App\Http\Controllers\KampusController@delete');
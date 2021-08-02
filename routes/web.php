<?php

use Illuminate\Support\Facades\Route;
use App\Siswa;

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

Route::get('/', function ()
{
    $data_siswa = Siswa::all();
    return view('welcome')
    ->with("data_siswa",$data_siswa);
});

Route::get('/tambah','SiswaController@tambah');
Route::post('/save','SiswaController@save');
Route::get('/delete/{id}','SiswaController@delete');
Route::get('/edit/{id}','SiswaController@edit');
Route::post('/update/{id}','SiswaController@update');

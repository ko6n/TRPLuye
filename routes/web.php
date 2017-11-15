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
    return view('home');
});

Route::get('/masuk', function () {
    return view('masuk');
});
// Route::get('tambahpemesanan', function () {
//     return view('tambahpemesanan');
// });
Route::get('administrasi', function () {
    return view('homeAdministrasi');
});





Route::post('dash','c_login@login');
Route::get('logout','c_login@login');


//administrasi
Route::get('lihatpemesanan','c_administrasi@index');
Route::get('formpemesanan','c_administrasi@showpemesanan');
Route::get('tambahpesanan', 'c_administrasi@tambahpemesanan');
Route::delete('hapuspemesanan{id_pemesanan}','c_administrasi@hapuspemesanan');
Route::get('detailpesanan{id}', 'c_administrasi@detailpemesanan');
Route::get('ubahpesanan&{id}', 'c_administrasi@ubahpemesanan');

Route::get('formkatalogharga','c_administrasi@showkatalogharga');
Route::get('tambahkatalogharga', 'c_administrasi@tambahkatalogharga');
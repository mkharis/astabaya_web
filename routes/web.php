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

Route::get('/', function () {
    return view('beranda');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/publikasi', function () {
    return view('publikasi');
});

Route::get('/lainnya', function () {
    return view('lainnya');
});

Route::get('/lainnya/infografis', function () {
    return view('infografis');
});

$router->group(['prefix' => 'tabel'], function () use ($router) {
    $router->get('get',  ['uses' => 'TabelController@get']);
    $router->post('insert',  ['uses' => 'TabelController@insert']);
    $router->post('delete',  ['uses' => 'TabelController@delete']);
    $router->post('update',  ['uses' => 'TabelController@update']);
});

$router->group(['prefix' => 'isi_tabel'], function () use ($router) {
    $router->get('get',  ['uses' => 'IsiTabelController@get']);
    $router->post('insert',  ['uses' => 'IsiTabelController@insert']);
    $router->post('delete',  ['uses' => 'IsiTabelController@delete']);
    $router->post('update',  ['uses' => 'IsiTabelController@update']);
});

$router->group(['prefix' => 'kategori'], function () use ($router) {
    $router->get('get',  ['uses' => 'KategoriController@get']);
    $router->post('insert',  ['uses' => 'KategoriController@insert']);
    $router->post('delete',  ['uses' => 'KategoriController@delete']);
    $router->post('update',  ['uses' => 'KategoriController@update']);
});

$router->group(['prefix' => 'sub_kategori'], function () use ($router) {
    $router->get('get',  ['uses' => 'SubKategoriController@get']);
    $router->post('insert',  ['uses' => 'SubKategoriController@insert']);
    $router->post('delete',  ['uses' => 'SubKategoriController@delete']);
    $router->post('update',  ['uses' => 'SubKategoriController@update']);
});

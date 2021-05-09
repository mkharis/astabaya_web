<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
    // Beranda
    Route::get('/', ['as' => 'beranda', 'uses' => 'BerandaController@get']);
    Route::post('/add', ['as' => 'berandaAdd', 'uses' => 'BerandaController@add']);
    Route::post('/edit', ['as' => 'berandaEdit', 'uses' => 'BerandaController@edit']);
    Route::post('/remove', ['as' => 'berandaRemove', 'uses' => 'BerandaController@remove']);
    // Kategori
    Route::get('/kategori', ['as' => 'kategori', 'uses' => 'KategoriController@get']);
    Route::post('/kategori/add', ['as' => 'kategoriAdd', 'uses' => 'KategoriController@add']);
    Route::post('/kategori/edit', ['as' => 'kategoriEdit', 'uses' => 'KategoriController@edit']);
    Route::post('/kategori/remove', ['as' => 'kategoriRemove', 'uses' => 'KategoriController@remove']);
    // Sub Kategori
    Route::post('/kategori/addSub', ['as' => 'subKategoriAdd', 'uses' => 'KategoriController@addSub']);
    Route::post('/kategori/editSub', ['as' => 'subKategoriEdit', 'uses' => 'KategoriController@editSub']);
    Route::post('/kategori/removeSub', ['as' => 'subKategoriRemove', 'uses' => 'KategoriController@removeSub']);
    // Tabel
    Route::get('/tabel/from/{subKategori}', ['as' => 'tabel', 'uses' => 'TabelController@get']);
    Route::post('/tabel/add', ['as' => 'tabelAdd', 'uses' => 'TabelController@add']);
    Route::post('/tabel/edit', ['as' => 'tabelEdit', 'uses' => 'TabelController@edit']);
    Route::post('/tabel/remove', ['as' => 'tabelRemove', 'uses' => 'TabelController@remove']);
    // Isi Tabel
    Route::post('/tabel/content/add', ['as' => 'tabelContentAdd', 'uses' => 'IsiTabelController@add']);
    Route::post('/tabel/content/remove', ['as' => 'tabelContentRemove', 'uses' => 'IsiTabelController@remove']);
    // Infografis
    Route::get('/infografis', ['as' => 'infografis', 'uses' => 'InfografisController@get']);
    Route::post('/infografis/add', ['as' => 'infografisAdd', 'uses' => 'InfografisController@add']);
    Route::post('/infografis/edit', ['as' => 'infografisEdit', 'uses' => 'InfografisController@edit']);
    Route::post('/infografis/remove', ['as' => 'infografisRemove', 'uses' => 'InfografisController@remove']);
    // Lainnya
    Route::get('/lainnya', ['as' => 'lainnya', 'uses' => 'TentangController@getInfo']);
    Route::post('/lainnya/updateInfo', ['as' => 'infoUpdate', 'uses' => 'TentangController@updateInfo']);
    Route::post('/lainnya/updateVisiMisi', ['as' => 'visiMisiUpdate', 'uses' => 'TentangController@updateVisiMisi']);
    Route::post('/lainnya/updateKontak', ['as' => 'kontakUpdate', 'uses' => 'TentangController@updateKontak']);
    Route::post('/lainnya/updateMedsos', ['as' => 'medsosUpdate', 'uses' => 'TentangController@updateMedsos']);
});


// API
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

$router->group(['prefix' => 'infografis'], function () use ($router) {
    $router->get('get',  ['uses' => 'InfografisController@get']);
    $router->post('insert',  ['uses' => 'InfografisController@insert']);
    $router->post('delete',  ['uses' => 'InfografisController@delete']);
    $router->post('update',  ['uses' => 'InfografisController@update']);
});

$router->group(['prefix' => 'beranda'], function () use ($router) {
    $router->get('get',  ['uses' => 'BerandaController@get']);
    $router->post('insert',  ['uses' => 'BerandaController@insert']);
    $router->post('delete',  ['uses' => 'BerandaController@delete']);
    $router->post('update',  ['uses' => 'BerandaController@update']);
});

$router->group(['prefix' => 'tentang'], function () use ($router) {
    $router->get('get',  ['uses' => 'TentangController@get']);
});


// For login
$router->group([
    'prefix' => 'auth'
], function() use ($router) {
    $router->get('login', ['as' => 'login', 'uses' => 'Auth\AuthenticationController@showLogin']);
    $router->post('login', ['uses' => 'Auth\AuthenticationController@login']);
    $router->post('logout', ['uses' => 'Auth\AuthenticationController@logout']);
    $router->post('refresh', ['uses' => 'Auth\AuthenticationController@refresh']);
    $router->post('me', ['uses' => 'Auth\AuthenticationController@me']);

});

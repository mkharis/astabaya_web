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

Route::get('/', ['as' => 'beranda', function () {
    return view('beranda');
}]);

Route::group(['namespace' => 'Admin'], function () {
    // Kategori
    Route::get('/kategori', ['as' => 'kategori', 'uses' => 'KategoriController@getKategori']);
    // Lainnya
    Route::get('/lainnya', ['as' => 'lainnya', 'uses' => 'TentangController@getInfo']);
    Route::post('/lainnya/updateInfo', ['as' => 'infoUpdate', 'uses' => 'TentangController@updateInfo']);
    Route::post('/lainnya/updateVisiMisi', ['as' => 'visiMisiUpdate', 'uses' => 'TentangController@updateVisiMisi']);
    Route::post('/lainnya/updateKontak', ['as' => 'kontakUpdate', 'uses' => 'TentangController@updateKontak']);
    Route::post('/lainnya/updateMedsos', ['as' => 'medsosUpdate', 'uses' => 'TentangController@updateMedsos']);
});


Route::get('/publikasi', ['as' => 'publikasi', function () {
    return view('publikasi');
}]);

// Route::get('/lainnya', ['as' => 'lainnya', function () {
//     return view('lainnya');
// }]);

Route::get('/lainnya/infografis', ['as' => 'infografis', function () {
    return view('infografis');
}]);


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

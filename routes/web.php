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
    return view('welcome');
});


Route::get('/atividades', 'AtividadeController@index');
Route::get('/atividades/create', 'AtividadeController@create');
Route::post('/atividades', 'AtividadeController@store');
Route::get('/atividades/{id}', 'AtividadeController@show');
Route::get('/atividades/{id}/edit', 'AtividadeController@edit');
Route::put('/atividades/{id}', 'AtividadeController@update');
Route::get('/atividades/{id}/delete', 'AtividadeController@delete');
Route::delete('/atividades/{id}', 'AtividadeController@destroy');

Route::get('/mensagens', 'MensagensController@index');
Route::get('/mensagens/create', 'MensagensController@create');
Route::post('/mensagens', 'MensagensController@store');
Route::get('/mensagens/{id}', 'MensagensController@show');
Route::get('/mensagens/{id}/edit', 'MensagensController@edit');
Route::put('/mensagens/{id}', 'MensagensController@update');
Route::get('/mensagens/{id}/delete', 'MensagensController@delete');
Route::delete('/mensagens/{id}', 'MensagensController@destroy');






//php artisan key:generate
//composer dump-autoload
//php artisan migrate --seed
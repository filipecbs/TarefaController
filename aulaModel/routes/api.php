<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mostraAula/{id}','AulaController@showAula')->name('mostra');
Route::get('listaAula','AulaController@listAula');
Route::post('criaAula','AulaController@createAula');
Route::put('atualizaAula/{id}','AulaController@updateAula');
Route::delete('deletaAula/{id}','AulaController@deleteAula');


Route::get('mostraNota/{id}','GradeController@showGrade')->name('mostra');
Route::get('listaNota','GradeController@listGrade');
Route::post('criaNota','GradeController@createGrade');
Route::put('atualizaNota/{id}','GradeController@updateGrade');
Route::delete('deletaNota/{id}','GradeController@deleteGrade');

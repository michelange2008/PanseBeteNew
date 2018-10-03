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
Route::group(['middleware' => ['auth']], function () {

    Route::get('/', ['uses' => 'AccueilController@accueil', 'as' => 'accueil']);

    Route::get('/choix/{espece_id}', ['uses' => 'AccueilController@choix', 'as' => 'choix']);

    Route::get('/presentation', ['uses' => 'AccueilController@presentation', 'as' => 'presentation']);

    Route::get('/infos', ['uses' => 'AccueilController@infos', 'as' => 'infos']);

    Route::get('/saisie/nouvelle', ['uses' => 'SaisieController@nouvelle', 'as' => 'saisie.nouvelle']);

    Route::get('/saisie', ['uses' => 'SaisieController@accueil', 'as' => 'saisie.accueil']);

    Route::get('/saisie/{theme_id}', ['uses' => 'SaisieController@alertes', 'as' => 'saisie.alertes']);

    Route::post('/saisie/enregistre', ['uses' => 'SaisieController@enregistre', 'as' => 'saisie.enregistre']);

    Route::get('/saisie/resultats', ['uses' => 'SaisieController@enregistre', 'as' => 'saisie.resultats']);

    Route::get('/saisie/origines/{alerte_id}', ['uses' => 'SaisieController@origines', 'as' => 'saisie.origines']);

    Route::post('/saisie/origines/store', ['uses' => 'SaisieController@storeOrigines', 'as' => 'saisie.origines.store']);

    Route::get('/lecture', ['uses' => 'LectureController@liste', 'as' => 'lecture.liste']);

    Route::get('/lecture/detail/{saisie_id}', ['uses' => 'LectureController@detail', 'as' => 'lecture.detail']);

    Route::get('/lecture/supprimer/{saisie_id}', ['uses' => 'LectureController@supprimer', 'as' => 'lecture.supprimer']);

    Route::get('/essai', ['uses' => 'EssaiController@index', 'as' => 'essai']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
Route::get('/', ['uses' => 'AccueilController@index', 'as' => 'front']);

Route::get('/visiteur', ['uses' => 'VisiteurController@index', 'as' => 'visiteur.index']);

Route::post('/visiteur/envoi', ['uses' => 'VisiteurController@envoi', 'as' => 'visiteur.envoi']);

Route::get('/visiteur/patience', ['uses' => 'VisiteurController@afficheNonValide', 'as' => 'visiteur.nonvalide']);

Route::get('/demo', ['uses' => 'VisiteurController@demo', 'as' => 'demo']);

Route::get('/presentation', ['uses' => 'VisiteurController@presentation', 'as' => 'visiteur.presentation']);

Route::group(['middleware' => ['auth', 'isValid']], function () {

  // Gestion des utilisateurs

    Route::get('/utilisateur/tousSauf/{id}', ['uses' => 'UserController@tousSauf', 'as' => 'tousSauf']);

    Route::get('/utilisateur/changeSaisieUser/{ancien_user_id}/{nouveau_user_id}', ['uses' => 'UserController@changeSaisieUser', 'as' => 'changeSaisieUser']);

    Route::resource('/utilisateur', 'UserController');

    Route::get('/administration', ['uses' => 'AdminController@index', 'as' => 'admin.index']);

    // Route::get('/admin', ['uses' => 'AdminController@index', 'as' => 'admin.index']);
    // Route::delete('/visiteur/destroy/{id}', ['uses' => 'VisiteurController@destroy', 'as' => 'visiteur.destroy']);

    // Route::post('/visiteur/transferre', ['uses' => 'UserController@transferre', 'as' => 'visiteur.transferre']);

    Route::get('/administration/valide/{id}', ['uses' => 'UserController@valideUser', 'as' => 'admin.valide']);

  // Routes principales

    Route::get('/accueil', ['uses' => 'AccueilController@accueil', 'as' => 'accueil']);

    Route::get('/description', ['uses' => 'AccueilController@description', 'as' => 'description']);

    Route::get('/instructions', ['uses' => 'AccueilController@instructions', 'as' => 'instructions']);

    Route::get('/credits', ['uses' => 'AccueilController@credits', 'as' => 'credits']);

    Route::get('/mentions_legales', ['uses' => 'AccueilController@mentions_legales', 'as' => 'mentions_legales']);

    Route::get('/aide', ['uses' => 'AccueilController@aide', 'as' => 'aide']);

    Route::get('entravaux/{espece_id}', ['uses' => 'AccueilController@entravaux', 'as' => 'entravaux']);

  // Saisies

    Route::get('/saisie/nouvelle/{elevage}/{espece_id}', ['uses' => 'SaisieController@nouvelle', 'as' => 'saisie.nouvelle']);

    Route::get('/saisie/modifier/{saisie}', ['uses' => 'SaisieController@modifier', 'as' => 'saisie.modifierBis']);

    Route::get('/saisie', ['uses' => 'SaisieController@accueil', 'as' => 'saisie.accueil']);

    Route::get('/saisie/{theme_id}', ['uses' => 'SaisieController@alertes', 'as' => 'saisie.alertes']);

    Route::post('/saisie/enregistre', ['uses' => 'SaisieController@enregistre', 'as' => 'saisie.enregistre'])->middleware('nullToZero');

    Route::get('/saisie/resultats', ['uses' => 'SaisieController@enregistre', 'as' => 'saisie.resultats']);

    Route::post('/saisie/origines/store', ['uses' => 'SaisieController@storeOrigines', 'as' => 'saisie.origines.store']);

  // Lecture des saisies

    Route::get('/lecture/detail/{saisie_id}', ['uses' => 'LectureController@detail', 'as' => 'lecture.detail']);

    Route::get('/lecture/supprimer/{saisie_id}', ['uses' => 'LectureController@supprimer', 'as' => 'lecture.supprimer']);

    Route::get('/lecture/observations/{alerte_id}', ['uses' => 'LectureController@observations', 'as' => 'lecture.observations']);

    Route::get('/lecture/origines/{saisie_id}', ['uses' => 'LectureController@originesListe', 'as' => 'lecture.originesListe']);

    Route::get('/lecture/pdf/{saisie_id}', ['uses' => 'PdfController@index', 'as' => 'pdf']);
});

Auth::routes();

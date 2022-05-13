<?php
use App\Http\Controllers\SaisieController;

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

Route::get('/presentation', ['uses' => 'VisiteurController@presentation', 'as' => 'visiteur.presentation']);

Route::group(['middleware' => ['auth', 'isValid']], function () {

  // Gestion des utilisateurs

    Route::get('/utilisateur/tousSauf/{id}', ['uses' => 'UserController@tousSauf', 'as' => 'tousSauf']);

    Route::get('/utilisateur/changeSaisieUser/{ancien_user_id}/{nouveau_user_id}', ['uses' => 'UserController@changeSaisieUser', 'as' => 'changeSaisieUser']);

    Route::resource('/utilisateur', 'UserController');

    Route::get('/administration', ['uses' => 'AdminController@index', 'as' => 'admin.index']);

    Route::get('/administration/valide/{id}', ['uses' => 'UserController@valideUser', 'as' => 'admin.valide']);

  // Routes principales

    Route::get('/accueil', ['uses' => 'AccueilController@accueil', 'as' => 'accueil']);

    Route::get('/description', ['uses' => 'AccueilController@description', 'as' => 'description']);

    Route::get('/instructions', ['uses' => 'AccueilController@instructions', 'as' => 'instructions']);

    Route::get('/credits', ['uses' => 'AccueilController@credits', 'as' => 'credits']);

    Route::get('/contact', ['uses' => 'AccueilController@contact', 'as' => 'contact']);

    Route::get('/mentions_legales', ['uses' => 'AccueilController@mentions_legales', 'as' => 'mentions_legales']);

    Route::get('/aide', ['uses' => 'AccueilController@aide', 'as' => 'aide']);

    Route::get('/aide/video', ['uses' => 'AccueilController@video', 'as' => 'aide.video']);

  // Saisies

    Route::controller(SaisieController::class)->group(function() {

      Route::get('/saisie/nouvelle/{elevage}/{espece_id}', 'nouvelle')->name('saisie.nouvelle');

      Route::get('/saisie/{saisie_id}', 'accueil')->name('saisie.accueil');

      Route::get('/saisie/observations/{saisie_id}', 'observations')->name('saisie.observations');

      Route::get('/saisie/chiffres/{saisie_id}', 'chiffres')->name('saisie.chiffres');

      Route::post('/saisie/enregistreChiffres', 'enregistreChiffres')->name('saisie.enregistreChiffres');

      Route::get('/saisie/syntheseChiffres/{saisie_id}', 'syntheseChiffres')->name('saisie.syntheseChiffres');

      Route::post('/saisie/enregistreObservations', 'enregistreObservations')->name('saisie.enregistreObservations')->middleware('nullToZero');

      Route::get('/saisie/modifier/{saisie}', 'modifier')->name('saisie.modifier');

      Route::get('/saisie/{saisie_id}/{theme_id}', 'alertes')->name('saisie.alertes');

      Route::get('/saisie/resultats', 'enregistre')->name('saisie.resultats');

      Route::post('/saisie/origines/store', 'storeOrigines')->name('saisie.origines.store');

    });

  // Lecture des saisies

    Route::get('/lecture/detail/{saisie_id}', ['uses' => 'LectureController@detail', 'as' => 'lecture.detail']);

    Route::get('/lecture/supprimer/{saisie_id}', ['uses' => 'LectureController@supprimer', 'as' => 'lecture.supprimer']);

    Route::get('/lecture/observations/{alerte_id}', ['uses' => 'LectureController@observations', 'as' => 'lecture.observations']);

    Route::get('/lecture/origines/{saisie_id}', ['uses' => 'LectureController@originesListe', 'as' => 'lecture.originesListe']);

    Route::get('/lecture/pdf/{saisie_id}', ['uses' => 'PdfController@index', 'as' => 'pdf']);

  // Gestion des notes

    Route::resource('/notes', 'NoteController');
});

Auth::routes();

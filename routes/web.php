<?php
use App\Http\Controllers\SaisieController;
use App\Http\Controllers\SorigineController;

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


Route::group(['middleware' => ['auth', 'isValid', 'isAdmin']], function() {

  Route::get('/dev', 'DevController@dev')->name('dev');

  Route::prefix('/chiffres')->controller(ChiffreController::class)->group(function() {

    Route::get('/', 'index')->name('chiffre.index');
    Route::get('/create', 'create')->name('chiffre.create');
    Route::post('/store', 'store')->name('chiffre.store');
    Route::put('/update/{chiffre_id}', 'update')->name('chiffre.update');
    // Route::get('/{chiffre_id}', 'show')->name('chiffre.show');
    Route::get('/edit/{chiffre_id}', 'edit')->name('chiffre.edit');
    Route::delete('/delete/{chiffre_id}', 'destroy')->name('chiffre.destroy');

  });

  Route::prefix('/alerte')->controller(AlerteController::class)->group(function() {

    Route::get('/', 'index')->name('alerte.index');
    Route::get('/index/{espece_nom}', 'indexParEspece')->name('alerte.indexParEspece');
    Route::get('/create', 'create')->name('alerte.create');
    Route::post('/store', 'store')->name('alerte.store');
    Route::put('/update/{alerte_id}', 'update')->name('alerte.update');
    Route::put('/updateListe/{alerte_id}', 'updateListe')->name('alerte.updateListe');
    Route::put('/updateNum/{alerte_id}', 'updateNum')->name('alerte.updateNum');
    Route::get('/{alerte_id}', 'show')->name('alerte.show');
    Route::get('/edit/{alerte_id}', 'edit')->name('alerte.edit');
    Route::get('/editListe/{alerte_id}', 'editParamListe')->name('alerte.editParamListe');
    Route::get('/editNum/{alerte_id}', 'editParamNum')->name('alerte.editParamNum');
    Route::delete('/delete/{alerte_id}', 'destroy')->name('alerte.destroy');

  });

  Route::prefix('/alerte/num')->controller(NumalerteController::class)->group(function() {

    Route::get('/create/{alerte_id}', 'create')->name('num.create');
    Route::post('/store', 'store')->name('num.store');
    Route::put('/update/{alerte_id}', 'update')->name('num.update');
    Route::get('/edit/{alerte_id}', 'edit')->name('num.edit');

  });

  Route::prefix('/alerte/liste')->controller(CritalerteController::class)->group(function() {

    Route::get('/create/{alerte_id}', 'create')->name('liste.create');
    Route::post('/store', 'store')->name('liste.store');
    Route::put('/update/{alerte_id}', 'update')->name('liste.update');
    Route::get('/edit/{alerte_id}', 'edit')->name('liste.edit');

  });
  Route::prefix('/origine')->controller(OrigineController::class)->group(function() {

    Route::get('/', 'index')->name('origine.index');
    Route::get('/index/{alerte_id}', 'indexParAlerte')->name('origine.indexParAlerte');
    Route::get('/create/{alerte_id}', 'create')->name('origine.create');
    Route::post('/store', 'store')->name('origine.store');
    Route::put('/update/{origine_id}', 'update')->name('origine.update');
    // Route::get('/{origine_id}', 'show')->name('origine.show');
    Route::get('/edit/{origine_id}', 'edit')->name('origine.edit');
    Route::delete('/delete/{origine_id}', 'destroy')->name('origine.destroy');

  });


});

Route::group(['middleware' => ['auth', 'isValid']], function () {

  // Gestion des utilisateurs
  Route::prefix('/utilisateur')->controller(UserController::class)->group(function() {

    Route::get('/', 'index')->name('user.index');
    Route::get('/create', 'create')->name('user.create');
    Route::post('/store', 'store')->name('user.store');
    Route::get('/{id}', 'show')->name('user.show');
    Route::get('/edit/{id}', 'edit')->name('user.edit');
    Route::put('/update/{id}', 'update')->name('user.update');
    Route::delete('/destroy/{id}', 'destroy')->name('user.destroy');

  });
  // Gestion des droits des utilisateurs par l'admin: acceptation, suppression
  Route::prefix('/administration')->controller(AdminController::class)->group( function() {
    // Affiche la liste des utilisateurs avec ceux à valider et ceux validés
    Route::get('/', 'index')->name('admin.index');
    // Permet de valider un utilisateur qui a fait une demande d'accès
    Route::get('/valide/{id}', 'valideUser')->name('admin.valide');

  });
  // Gestion des appels AJAX
  Route::prefix('/api')->controller(ApiController::class)->group( function() {
    // Route utilisée par admin.js pour changer les saisies d'un utilisateur que l'on supprimme
    Route::get('/changeSaisieUser/{ancien_user_id}/{nouveau_user_id}', 'changeSaisieUser')->name('changeSaisieUser');
    // Route utilisée par admin.js pour la même raison que précédemment
    Route::get('/tousSauf/{id}', 'tousSauf')->name('tousSauf');

  });


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

      Route::get('/saisie/observations/{saisie_id}', 'saisieObservations')->name('saisie.observations');

      Route::post('/saisie/enregistreObservations', 'enregistreObservations')->name('saisie.enregistreObservations')->middleware('nullToZero');

      Route::get('/saisie/resultats', 'enregistre')->name('saisie.resultats');

    });

    Route::controller(SchiffreController::class)->group(function() {

      Route::get('/saisie/schiffres/edit/{saisie_id}', 'edit')->name('schiffre.edit');

      Route::post('/saisie/schiffres/store', 'store')->name('schiffre.store');

      Route::get('/saisie/schiffres/{saisie_id}', 'show')->name('schiffre.show');

    });

    // Routes des Sorigines

    Route::controller(SorigineController::class)->group(function() {

      Route::get('/saisie/sorigines/{saisie_id}', 'index')->name('sorigines.index');

      Route::get('/saisie/sorigines/show/{saisie_id}', 'show')->name('sorigines.show');

      Route::post('/saisie/sorigines/edit', 'edit')->name('sorigines.edit');

      Route::post('/saisie/sorigines/enregistre', 'store')->name('sorigines.store');

    });

  // Lecture des saisies

    Route::get('/lecture/detail/{saisie_id}', ['uses' => 'LectureController@detail', 'as' => 'lecture.detail']);

    Route::get('/lecture/supprimer/{saisie_id}', ['uses' => 'LectureController@supprimer', 'as' => 'lecture.supprimer']);

    Route::get('/lecture/originesSalerte/{alerte_id}', ['uses' => 'LectureController@originesSalerte', 'as' => 'lecture.originesSalerte']);


    Route::get('/lecture/pdf/{saisie_id}', ['uses' => 'PdfController@index', 'as' => 'pdf']);

  // Gestion des notes

    Route::resource('/notes', 'NoteController');
});

Auth::routes();

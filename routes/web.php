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


Route::group(['middleware' => ['auth', 'isValid', 'isAdmin', 'menu']], function() {

  Route::get('/dev', 'DevController@dev')->name('dev');
  Route::post('/store', 'DevController@store')->name('dev.store');

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
    Route::get('/edit/{origine_id}', 'edit')->name('origine.edit');
    Route::delete('/delete/{origine_id}', 'destroy')->name('origine.destroy');

  });

  Route::get('/paraferme/ranger', 'ParafermeController@ranger')->name('paraferme.ranger');

  Route::post('/paraferme/storeRanger', 'ParafermeController@storeRanger')->name('paraferme.storeRanger');

  Route::resource('/paraferme', 'ParafermeController');


});

Route::group(['middleware' => ['auth', 'isValid', 'menu']], function () {

  // Gestion des utilisateurs
  Route::prefix('/utilisateur')->controller(UserController::class)->group(function() {

    Route::get('/', 'index')->name('user.index');
    Route::get('/create', 'create')->name('user.create');
    Route::post('/store', 'store')->name('user.store');
    Route::get('/{user}', 'show')->name('user.show');
    Route::get('/edit/{user}', 'edit')->name('user.edit');
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
    // Route utiliséee par afficherOrigines.js pour récupérer la liste des sorigines d'une salerte
    Route::get('/originesSalerte/{salerte_id}', 'originesSalerte');

  });


  // Routes principales
  //
  Route::controller('AccueilController')->group(function() {
    // Liste des saisies de l'user authentifié
    Route::get('/accueil', 'accueil')->name('accueil');
    // Liste des saisies d'un ami suivi de l'auteur identifié
    Route::get('/ami/{user}', 'saisiesAmi')->name('saisiesAmi');
    // Description du programme (cf. menu principal)
    Route::get('/description', 'description')->name('description');
    // Instructions (cf. menu principal);
    Route::get('/instructions', 'instructions')->name('instructions');
    // etc.
    Route::get('/credits', 'credits')->name('credits');

    Route::get('/contact', 'contact')->name('contact');

    Route::get('/mentions_legales', 'mentions_legales')->name('mentions_legales');

    Route::get('/aide', 'aide')->name('aide');

    Route::get('/aide/video', 'video')->name('aide.video');

  });

  // Saisies

    Route::controller(SaisieController::class)->group(function() {

      Route::get('/saisie/nouvelle/{elevage}/{espece_id}', 'nouvelle')->name('saisie.nouvelle');
      // Affiche la saisie en cours
      Route::get('/saisie/{saisie_id}', 'show')->name('saisie.show');
      // Modifie les observations d'une saisie (les données chiffrées passent par le SchiffreController)
      Route::get('/saisie/observations/{saisie_id}', 'saisieObservations')->name('saisie.observations');

      Route::post('/saisie/enregistreObservations', 'enregistreObservations')->name('saisie.enregistreObservations')->middleware('nullToZero');

      Route::get('/saisie/destroy/{saisie_id}', 'destroy')->name('saisie.destroy');

      // Route::get('/saisie/resultats', 'enregistre')->name('saisie.resultats');

    });

    // Gestion de la saisie des paramètres numériques
    Route::prefix('/saisie/schiffres')->controller(SchiffreController::class)->group(function() {

      Route::get('/edit/{saisie_id}', 'edit')->name('schiffre.edit');

      Route::post('/store', 'store')->name('schiffre.store');

      Route::get('/{saisie_id}', 'show')->name('schiffre.show');

    });

    Route::controller(SalerteController::class)->group(function() {

      Route::get('/salerte/{saisie_id}/{theme_id}', 'index')->name('salerte.index');

    });

    // Routes des Sorigines

    Route::prefix('/saisie/sorigines')->controller(SorigineController::class)->group(function() {

      Route::get('/{saisie_id}', 'index')->name('sorigines.index');

      Route::get('/show/{saisie_id}', 'show')->name('sorigines.show');

      Route::post('/edit', 'edit')->name('sorigines.edit');

      Route::post('/enregistre', 'store')->name('sorigines.store');

    });
    // Production de pdf
    Route::prefix('pdf')->controller(PdfController::class)->group(function() {

      // Tableau vide pour la saisie de chiffres
      Route::get('/modeleNum/{espece}', 'PdfController@modeleNum')->name('pdf.modeleNum');
      // Tableau vide pour la saisie des observations
      Route::get('/modeleObs/{espece}', 'PdfController@modeleObs')->name('pdf.modeleObs');
      // Exportation de la saisie
      Route::get('/saisie/{saisie}', 'PdfController@saisie')->name('pdf.saisie');

    });

  // Route de gestion des informations de la ferme d'un user
  Route::prefix('ferme')->controller(FermeController::class)->group(function() {

    Route::get('/{user}', 'index')->name('ferme.index');

    Route::get('/{user}/create', 'create')->name('ferme.create');

    Route::post('{user}', 'store')->name('ferme.store');

    Route::get('/edit/{user}', 'edit')->name('ferme.edit');

    Route::put('{user}', 'update')->name('ferme.update');

  });

  // Gestion des amis
  Route::prefix('amis')->controller(AmiController::class)->group(function() {

    Route::get('/{user}', 'index')->name('amis.index');

    Route::get('/{user}/create', 'create')->name('amis.create');

    Route::post('{user}', 'store')->name('amis.store');

    Route::get('/edit/{user}', 'edit')->name('amis.edit');

    Route::put('{user}', 'update')->name('amis.update');

  });

  // Gestion des notes

    Route::resource('/notes', 'NoteController');
});

Auth::routes();

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Blade::include('fragments.btnValider','valider');
      Blade::include('fragments.btnVers','vers');
      Blade::include('fragments.boutonEnregistre', 'enregistre');
      Blade::include('fragments.boutonSupprimer', 'supprimer');
      Blade::include('fragments.blocEnregistreAnnule', 'enregistreAnnule');
      Blade::include('fragments.btnSynthese', 'synthese');
      Blade::include('fragments.boutonAnnule', 'annule');
      Blade::include('fragments.boutonEdit', 'edit');

      Blade::include('comp.titre', 'titre');

      Blade::include('fragments.dateSortable','dateSortable');

      Blade::include('fragments.nomLien', 'nomLien');
      Blade::include('fragments.voir','voir');
      Blade::include('fragments.ouinon','ouinon');
      Blade::include('fragments.supprLigne','supprLigne');
      Blade::include('fragments.ligneEdit','ligneEdit');
      Blade::include('fragments.ligneShow','ligneShow');

      Blade::include('fragments.inputText','inputText');
      Blade::include('fragments.inputNum','inputNum');
      Blade::include('fragments.inputOuiNon','inputOuiNon');
      Blade::include('fragments.inputSelect','inputSelect');
      Blade::include('fragments.inputCheckbox','inputCheckbox');
      Blade::include('fragments.inputCheckboxV','inputCheckboxV');
      Blade::include('fragments.inputHidden','inputHidden');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

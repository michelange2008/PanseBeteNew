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

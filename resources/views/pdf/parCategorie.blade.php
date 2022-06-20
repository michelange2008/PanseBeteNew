{{-- Issu de pdfSaisie.blade.php
Présente les données par catégorie (alim, logement, hygiène, etc.)
 --}}
 <div class="row mt-3">
   <h2>Résultats globaux</h2>
   @foreach ($categories as $categorie)
     <?php $afficheCat = true;
     $i = 0;  ?>
     @foreach($saisie->salertes->where('danger', 1) as $sAlerte)
       @foreach ($sAlerte->sorigines as $sorigines)
         @if($sorigines->origine->categorie_id === $categorie->id)
           <?php $afficheCat = false;
           $i++;?>
         @endif
       @endforeach
     @endforeach

     {{-- @if (!$afficheCat) --}}
       <div class="theme theme-pb">
         <h3>{{mb_strtoupper($categorie->nom)}}</h3>
         @foreach($saisie->salertes->where('danger', 1) as $sAlerte)
           <div class="question">
             @foreach ($sAlerte->sorigines as $sorigines)
               @if($sorigines->origine->categorie_id === $categorie->id)
                   <p>{{$sorigines->origine->reponse}}</p>

               @endif
             @endforeach
         </div>
         @endforeach
       </div>
     {{-- @endif --}}
   @endforeach
 </div>

<!--


      <div  id="origine_{{$theme->id}}" >
            <input type="hidden" id="route_{{$sAlerte->id}}" action ="{{route('lecture.observations', $sAlerte->id)}}" />
            <div class="panneau-alerte alert  rounded-0">
              <div class="element-alerte justify-content-between">
                <div class="d-flex">

                <p>
                  @if($sAlerte->alerte->type === 'liste')
                  <span class="text-danger font-weight-bold">
                    <?php
                      // foreach($sAlerte->alerte->critalertes as $crit)
                      // {
                      //   if($crit->valeur == $sAlerte->valeur)
                      //   echo $crit->nom;
                      }
                   ?>
                 </span>
                  @else
                  <span class="font-weight-bold">{{$sAlerte->valeur}} {{$sAlerte->alerte->unite}}</span>
                  @endif
                </p>
                @if($sAlerte->alerte->type !== 'liste')
                <p>
                &nbsp&nbsp( < {{$sAlerte->alerte->niveau}} {{$sAlerte->alerte->unite}})
                </p>
                @endif
              </div>
                <img id = "icone-origine_{{$saisie->id}}_{{$sAlerte->id}}" src="{{URL::asset('svg/saisie')}}/oeil.svg" alt="origine" class="affiche-origine otoveil" />
            </div>

            </div>

        @endif
        @endforeach
      </div>
        @endif
      @endforeach
    </div>

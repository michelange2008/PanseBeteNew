@push('js')

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('js/jquery.ui.accordion.js') }}"></script>
<script src="{{ asset('js/jquery.ui.core.js') }}"></script>

<script>
$(function() {
  $( "#accordion" ).accordion();
});
</script>

@endpush

@push('css')

<link href="{{ asset('css/jquery.ui.accordion.css') }}" rel="stylesheet">
<link href="{{ asset('css/jquery.ui.core.css') }}" rel="stylesheet">
<link href="{{ asset('css/jquery.ui.theme.css') }}" rel="stylesheet">
<link href="{{ asset('css/demo.css') }}" rel="stylesheet">

@endpush


<div class="demo">
	<div id="accordion">
		<h3><a href="#">Un outil pour évaluer la situation de son troupeau</a></h3>
		<div>
			<p>Cet outil est conçu pour vous éleveur, technicien ou vétérinaire. Vous souhaitez favoriser l’équilibre de santé de votre troupeau, résoudre des problèmes de déséquilibre aboutissant à la pathologie ou bien identifier les sources potentielles du déséquilibre. Il pourra également être utilisé lors d’échanges dans les binômes éleveurs/conseiller ou éleveurs/vétérinaire.</p>
      <p>Sa forme vous permettra de l’utiliser en direct dans le bâtiment d’élevage ou bien au bureau au moment du bilan annuel.</p>
      <p>Les informations sont organisées sous différents pôles d’indicateurs issus de votre observation et de vos analyses tout au long de l’année.</p>
		</div>
		<h3><a href="#">7 pôles d’observations et d’analyse pour se situer : </a></h3>
		<div>
			<ul>
        <li>Regard global sur le troupeau</li>
        <li>La reproduction du troupeau</li>
        <li>Les maladies métaboliques en élevage et à l’engraissement</li>
        <li>La santé des jeunes de la naissance à la reproduction</li>
        <li>Le parasitisme</li>
        <li>La santé des mamelles</li>
        <li>La santé des pieds</li>
      </ul>
		</div>
		<h3><a href="#">En pratique : 3 étapes : </a></h3>
		<div>
      <div>
        <p>
          1ère étape : Elle consiste à identifier les points qui méritent de l’attention à travers des indicateurs de suivi : Tableau appelé « Suivez vos alertes ». Cette étape consiste à évaluer la situation à des moments opportuns pour connaître votre situation « d’équilibre ou de déséquilibre » de la santé de votre troupeau. Ainsi, en répondant à quelques critères d’observation ou d’analyse, vous allez pouvoir identifier vos marges de progrès.
        </p>
        <p>
        Les niveaux d’alerte indiqués dans ces tableaux sont issus des références issues de la recherche ou à dire d’experts. Ils peuvent différer selon les races, les situations particulières locales ou toutes autres causes influençant directement les performances zootechniques.
        </p>
      </div>

      2ème étape : A travers une liste de questions ciblées sur les points de vigilance que vous aurez identifiés dans la phase 1, vous allez pouvoir identifier vos axes de travail pour vous permettre de retrouver un meilleur équilibre de santé.
      A l’aide de la colonne « ma situation », dessiner un sourire  ou un boudeur  selon et noter en quelques mots ce que vous pouvez changer dans vos pratiques.

      3ème étape : Mettre en place les changements. Ayez bien en tête que les changements que vous proposez doivent être réalisables et réalistes ! N’hésitez pas à faire ce travail en binôme avec votre technicien d’élevage ou votre vétérinaire pour vous aider à la mise en place d’un plan d’action efficace et gérable pour vous.
      Enfin, fixez-vous un calendrier de votre plan d’action ! C’est sans doute l’étape la plus importante. Combien d’idée et de projet sont restés lettre morte ?

      Et après ? Observez les résultats de votre plan d’action. Adaptez le si c’est nécessaire sans perdre de vue votre objectif initial, mesurer les évolutions des alertes, observez vos animaux.
		</div>
	</div>
</div>

<div class="demo-description"><p>Cliquez sur les barres de titre afin de faire défiler les contenus</p></div>

{{-- matrice de champs d'input type text
    -> 2 variables obligatoire: $name, $label,
    -> 1 variable facultative en cas de modification et non de création
 --}}
<div class="form-group my-3">

  <label for="{{ $name }}">{{ ucfirst($label) }}</label>

  <input id="{{ $name }}"
          class="form-control @error( $name ) is-invalid @enderror"
          type="text"
          name="{{ $name }}"
          {{-- si c'est une modification on affiche la valeur d'origine --}}
          value="{{ $isName ?? old($name) }}"
          required>
  {{-- affichage de l'erreur --}}
  <div id="{{ $name }}feedback" class="invalid-feedback">

    @error( $name ) {{ $message }} @enderror

  </div>

</div>

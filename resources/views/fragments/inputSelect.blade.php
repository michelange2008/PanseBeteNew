<div class="form-group my-3">

  <label for="{{ $name }}">{{ ucfirst($label) }}</label>

  <select class="form-control" name="{{ $name }}" required>

    @foreach ($options as $option => $val)

      <option value="{{ $option }}" {{ $val }}
      {{-- Par défaut on affiche la valeur indiquée disabled --}}
      @if ($val == "disabled")
        selected="selected"

      @endif
      {{-- mais si c'est une modification on choisit l'ancienne valeur --}}
      @isset($isOption)

        @if ($option == $isOption)

          selected="selected"

        @endif

      @endisset

      >

      {{ ucfirst( $option ) }}

    </option>

  @endforeach

</select>


</div>

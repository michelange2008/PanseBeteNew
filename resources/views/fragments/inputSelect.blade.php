<div class="form-group my-3">

  <label for="{{ $name }}">{{ ucfirst($label) }}</label>

  <select id="{{ $name }}" class="form-control" name="{{ $name }}"

    @isset($required)
      @if ($required) required @endif
    @endisset

    >

    <option value=""></option>
    @foreach ($options as $option)

      <option value="{{ $option->id }}"

        @isset($default)

          @if ($option->id == $default)

            selected = "selected"

          @endif

        @endisset

        {{-- mais si c'est une modification on choisit l'ancienne valeur --}}
        @isset($isOption)

          @if ($option == $isOption )

            selected = "selected"

          @endif

        @endisset

        >

        {{ ucfirst( $option->nom ) }}

      </option>

    @endforeach

  </select>
  {{-- affichage de l'erreur --}}

  <div class="invalid-feedback">

    @error( $name ) {{ $message }} @enderror

    </div>

  </div>

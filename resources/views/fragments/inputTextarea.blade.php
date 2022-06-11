<div class="form-group my-3">

  <label class="form-label" for="{{ $name }}">{{ $label }}</label>

  <textarea class="form-control" name="{{ $name }}" rows="3" value="">{{ old($liste) }}</textarea>

  {{-- affichage de l'erreur --}}
  <div id="{{ $name }}feedback" class="invalid-feedback">

    @error( $name ) {{ $message }} @enderror

  </div>

</div>

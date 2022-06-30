{{-- issu de  user.editFerme--}}
<div class="input-group mb-3">

  <label class="input-group-text" for="{{ $paraferme->nom }}">{{ $paraferme->nom }}</label>

  <select class="form-select" name="{{ $paraferme->id }}">

    <option value=""></option>

    @foreach ($paraferme->parties as $key => $partie)

      <option value="{{ $partie }}"

      @if ($paraferme->value == trim($partie))

        selected = "selected"

      @endif

      >

      {{ ucfirst(trim($partie)) }}

    </option>

  @endforeach

</select>

</div>

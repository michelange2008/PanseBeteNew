@extends('layouts.app')

@section('contenu')
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-8">
          @isset($message)
            <div class="alert alert-success">
              <h3>{{$message}}</h3>
            </div>
          @endisset
          @isset($error)
            <div class="alert alert-danger">
              <h3>{{$error}}</h3>
            </div>
          @endisset
      </div>
    </div>
  </div>
@endsection

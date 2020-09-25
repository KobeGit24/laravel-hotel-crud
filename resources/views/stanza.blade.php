@extends('layout.main-layout')

@section('content')

  <h3>
    Stanza Numero:
    {{ $stanza -> room_number }}
  </h3>
  <h4>
    Numero Piano:
    {{ $stanza -> floor }}
  </h4>
  <h4>
    Numero Letti:
    {{ $stanza -> beds }}
  </h4>

  <a href="{{ route('index-stanze') }}">
    Torna alla lista delle Stanze 
  </a>


@endsection

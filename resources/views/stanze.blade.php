@extends('layout.main-layout')

@section('content')

  <ul>
    @foreach ($stanze as $s)

      <li>
        <a href="{{ route('show-stanza', $s -> id) }}">
          Stanza Numero:
          <span>
            {{ $s -> room_number }}
          </span>
        </a>
      </li>

    @endforeach
  </ul>

  <a href="{{ route('create-stanza') }}">
    crea una nuova stanza !!
  </a>

@endsection

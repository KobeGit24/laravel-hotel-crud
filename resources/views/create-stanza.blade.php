@extends('layout.main-layout')

@section('content')

  <form action="{{ route('store-stanza') }}" method="post">
    @csrf
    @method('POST')

    <div class="form-group">
      <label for="room_number">ROOM NUMBER</label>
      <br>
      <input type="text" name="room_number" value="">
    </div>
    <div class="form-group">
      <label for="floor">FLOOR</label>
      <br>
      <input type="text" name="floor" value="">
    </div>
    <div class="form-group">
      <label for="beds">BEDS</label>
      <br>
      <input type="text" name="beds" value="">
    </div>
    <button type="submit">CREATE</button>

  </form>

@endsection

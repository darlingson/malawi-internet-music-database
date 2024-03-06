@extends('layouts.app')

@section('content')
  <div id="app">
    <song-search></song-search>
  </div>

  <script src="{{ mix('js/app.js') }}"></script>
@endsection

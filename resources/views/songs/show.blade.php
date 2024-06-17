@extends('layouts.songs')

@section('content')
  <div class="max-w-md mx-auto p-4 pt-6 bg-white">
    <h2 class="text-2xl font-bold mb-4">{{ $song->title }}</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">
      <div class="bg-white rounded shadow-md">
        <div class="px-4 py-6">
          <p class="text-gray-600">Genre: {{ $song->genre }}</p>
          <p class="text-gray-600">Downloads: {{ $song->downloads }}</p>
          <p class="text-gray-600">Release Year: {{ $song->release_year }}</p>
          <p class="text-gray-600">Artist: {{ $song->artist }}</p>
          <p class="text-gray-600">Produced By: {{ $song->produced_by }}</p>
          <img src="{{ $song->cover_art_url }}" alt="Cover Art" class="w-full mb-4">
        </div>
      </div>
    </div>
  </div>
@endsection

@extends('layouts.songs')

@section('content')
  <div class="relative bg-white overflow-hidden">
    <div class="max-w-md mx-auto p-4 pt-6 bg-white">
      <div class="flex justify-center mb-4">
        <form action="{{ route('search') }}" method="GET">
          <input type="search" name="search" placeholder="Search songs" value="{{ request('search') }}" class="w-full pl-10 text-sm text-gray-900">
          <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
            Search
          </button>
        </form>
      </div>
    </div>
  </div>

  <div class="max-w mx-auto p-4 pt-6">
    <h2 class="text-2xl font-bold mb-4">Search Results</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      @if($songs->isEmpty())
        <p class="text-gray-600">No songs found.</p>
      @else
        @foreach($songs as $song)
          <div class="bg-white rounded shadow-md">
            <div class="px-4 py-6">
              <h5 class="text-lg font-bold">{{ $song->title }}</h5>
              <p class="text-gray-600">{{ $song->artist }}</p>
            </div>
          </div>
        @endforeach
      @endif
    </div>
  </div>
@endsection

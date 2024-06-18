@extends('layouts.songs')

@section('content')
<div class="relative overflow-hidden">
    <div class="max-w-7xl mx-auto p-4 pt-6">
        <div class="flex justify-center mb-8  p-6 rounded-lg shadow-sm">
            <form action="{{ route('search') }}" method="GET" class="flex w-full max-w-lg">
                <input type="search" name="search" placeholder="Search songs" class="w-full pl-4 pr-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-r-lg">
                    Search
                </button>
            </form>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto p-4 pt-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($songs as $song)
        <a href="{{ route('songs.show', $song->id) }}" class="block bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition-transform duration-200">
            <div class="px-4 py-6">
                <h5 class="text-lg font-bold text-gray-900">{{ $song->title }}</h5>
                <p class="text-gray-600">{{ $song->artist }}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection

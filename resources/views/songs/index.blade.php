@extends('layouts.songs')
@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            @forelse($songs as $song)
            <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $song->title }}</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $song->artist }}</p>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $song->release_year }}</p>
                </div>
                <div class="px-4 py-4 sm:px-6">
                    <a href="{{ route('songs.show', $song->id) }}" class="text-blue-500 hover:underline">View Details</a>
                </div>
                <!-- <div class="px-4 py-4 sm:px-6">
                            <a href="{{ route('songs.edit', $song->id) }}" class="text-blue-500 hover:underline">Edit Details</a>
                        </div> -->
            </div>
            @empty
            <div class="bg-white shadow sm:rounded-lg p-4">
                <p class="text-gray-500">No songs found.</p>
            </div>
            @endforelse

            <!-- Pagination links if needed -->
            {{ $songs->links() }}
        </div>
    </div>
</div>
@endsection

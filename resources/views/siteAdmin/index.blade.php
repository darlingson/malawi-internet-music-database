@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">All Songs</h1>
        <a href="{{ route('songs.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Add New Song
        </a>
    </div>
    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm">Title</th>
                    <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm">Artist</th>
                    <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm">Genre</th>
                    <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach($songs as $song)
                <tr>
                    <td class="w-1/4 py-3 px-4">{{ $song->title }}</td>
                    <td class="w-1/4 py-3 px-4">{{ $song->artist }}</td>
                    <td class="w-1/4 py-3 px-4">{{ $song->genre }}</td>
                    <td class="w-1/4 py-3 px-4 flex space-x-4">
                        <a href="{{ route('songs.edit', $song->id) }}" class="text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('songs.destroy', $song->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this song?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

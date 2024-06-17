<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = json_decode(file_get_contents('database/songs.json'), true);
        foreach ($data as $item) {
            Song::create([
                'title' => $item['title'],
                'genre' => $item['genre'],
                'downloads'=>$item['downloads'],
                'release_year' => $item['released_year'],
                'artist'=>$item['artist'],
                'produced_by' =>$item['produced_by'],
                'cover_art_url'=> $item['song_cover'],
            ]);
        }
    }
}

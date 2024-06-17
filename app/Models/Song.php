<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'genre',
        'downloads',
        'release_year',
        'artist',
        'produced_by',
        'cover_art_url',
    ];
}

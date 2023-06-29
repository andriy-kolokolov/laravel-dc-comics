<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic;
use App\Models\ComicArtist;
use App\Models\ComicWriter;

class ComicSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('comics') as $comic) {
            $artists = $comic['artists'];
            $writers = $comic['writers'];

            unset($comic['artists']);
            unset($comic['writers']);

            $createdComic = Comic::create($comic);

            foreach ($artists as $artist) {
                ComicArtist::create([
                    'comic_id' => $createdComic->id,
                    'artist' => $artist,
                ]);
            }

            foreach ($writers as $writer) {
                ComicWriter::create([
                    'comic_id' => $createdComic->id,
                    'writer' => $writer,
                ]);
            }
        }
    }
}


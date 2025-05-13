<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    public function run()
    {
        $movies = [
            [
                'name' => 'Pulp Fiction',
                'classification' => 'drama',
                'release_date' => '1994-10-14',
                'review' => 'Quentin Tarantino\'s masterpiece of interweaving storylines.',
                'type' => 'movie',
                'image_path' => 'movies/pulp-fiction.jpg'
            ],
            [
                'name' => 'The Big Lebowski',
                'classification' => 'comedy',
                'release_date' => '1998-03-06',
                'review' => 'A cult classic comedy from the Coen brothers.',
                'type' => 'movie',
                'image_path' => 'movies/big-lebowski.jpg'
            ],
            [
                'name' => 'Twin Peaks',
                'classification' => 'thriller',
                'release_date' => '1990-04-08',
                'review' => 'David Lynch\'s surreal mystery series.',
                'type' => 'series',
                'season' => 1,
                'image_path' => 'movies/twin-peaks.jpg'
            ],
            [
                'name' => 'Scream',
                'classification' => 'horror',
                'release_date' => '1996-12-20',
                'review' => 'A meta-horror film that redefined the slasher genre.',
                'type' => 'movie',
                'image_path' => 'movies/scream.jpg'
            ],
            [
                'name' => 'Superman',
                'classification' => 'action',
                'release_date' => '1978-12-15',
                'review' => 'The iconic superhero film that made you believe a man could fly.',
                'type' => 'movie',
                'image_path' => 'movies/superman.jpg'
            ],
            [
                'name' => 'Mission: Impossible',
                'classification' => 'action',
                'release_date' => '1996-05-22',
                'review' => 'Tom Cruise stars in this thrilling spy action movie.',
                'type' => 'movie',
                'image_path' => 'movies/mission-impossible.jpg'
            ],
            [
                'name' => 'The Matrix',
                'classification' => 'action',
                'release_date' => '1999-03-31',
                'review' => 'A groundbreaking sci-fi action film about reality versus simulation.',
                'type' => 'movie',
                'image_path' => 'movies/matrix.jpg'
            ],
            [
                'name' => 'Fight Club',
                'classification' => 'drama',
                'release_date' => '1999-10-15',
                'review' => 'A mind-bending exploration of modern masculinity and consumerism.',
                'type' => 'movie',
                'image_path' => 'movies/fight-club.jpg'
            ],
            [
                'name' => 'Stranger Things',
                'classification' => 'thriller',
                'release_date' => '2016-07-15',
                'review' => 'A supernatural series that pays homage to 80s pop culture.',
                'type' => 'series',
                'season' => 4,
                'image_path' => 'movies/stranger-things.jpg'
            ],
            [
                'name' => 'The Walking Dead',
                'classification' => 'horror',
                'release_date' => '2010-10-31',
                'review' => 'Post-apocalyptic series about survival in a zombie-infested world.',
                'type' => 'series',
                'season' => 11,
                'image_path' => 'movies/walking-dead.jpg'
            ],
            [
                'name' => 'American Horror Story',
                'classification' => 'horror',
                'release_date' => '2011-10-05',
                'review' => 'Anthology series featuring different horror stories each season.',
                'type' => 'series',
                'season' => 10,
                'image_path' => 'movies/ahs.jpg'
            ],
            [
                'name' => 'Spider-Man',
                'classification' => 'action',
                'release_date' => '2002-05-03',
                'review' => 'The classic tale of Peter Parker becoming the friendly neighborhood Spider-Man.',
                'type' => 'movie',
                'image_path' => 'movies/spiderman.jpg'
            ]
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}

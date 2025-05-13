<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Character;
use App\Models\Movie;

class CharacterSeeder extends Seeder
{
    public function run()
    {
        $characters = [
            [
                'name' => 'Vincent Vega',
                'description' => 'Hitman working for Marsellus Wallace',
                'image_path' => 'characters/vincent-vega.jpg',
                'movies' => ['Pulp Fiction']
            ],
            [
                'name' => 'The Dude',
                'description' => 'Jeffrey "The Dude" Lebowski, the laid-back protagonist',
                'image_path' => 'characters/the-dude.jpg',
                'movies' => ['The Big Lebowski']
            ],
            [
                'name' => 'Dale Cooper',
                'description' => 'FBI Special Agent investigating Laura Palmer\'s murder',
                'image_path' => 'characters/dale-cooper.jpg',
                'movies' => ['Twin Peaks']
            ],
            [
                'name' => 'Sidney Prescott',
                'description' => 'The resilient protagonist of the Scream series',
                'image_path' => 'characters/sidney-prescott.jpg',
                'movies' => ['Scream']
            ],
            [
                'name' => 'Clark Kent',
                'description' => 'The Man of Steel, disguised as a mild-mannered reporter',
                'image_path' => 'characters/superman.jpg',
                'movies' => ['Superman']
            ],
            [
                'name' => 'Ethan Hunt',
                'description' => 'IMF agent known for impossible missions',
                'image_path' => 'characters/ethan-hunt.jpg',
                'movies' => ['Mission: Impossible']
            ],
            [
                'name' => 'Neo',
                'description' => 'The One who freed humanity from the Matrix',
                'image_path' => 'characters/neo.jpg',
                'movies' => ['The Matrix']
            ],
            [
                'name' => 'Tyler Durden',
                'description' => 'The charismatic and anarchistic soap salesman',
                'image_path' => 'characters/tyler-durden.jpg',
                'movies' => ['Fight Club']
            ],
            [
                'name' => 'Eleven',
                'description' => 'A young girl with psychokinetic abilities',
                'image_path' => 'characters/eleven.jpg',
                'movies' => ['Stranger Things']
            ],
            [
                'name' => 'Rick Grimes',
                'description' => 'Former sheriff deputy and leader of the survivor group',
                'image_path' => 'characters/rick-grimes.jpg',
                'movies' => ['The Walking Dead']
            ],
            [
                'name' => 'Tate Langdon',
                'description' => 'Troubled ghost from Murder House season',
                'image_path' => 'characters/tate-langdon.jpg',
                'movies' => ['American Horror Story']
            ],
            [
                'name' => 'Peter Parker',
                'description' => 'High school student turned superhero after being bitten by a radioactive spider',
                'image_path' => 'characters/peter-parker.jpg',
                'movies' => ['Spider-Man']
            ]
        ];

        foreach ($characters as $characterData) {
            $movies = $characterData['movies'];
            unset($characterData['movies']);
            
            $character = Character::create($characterData);
            
            $movieIds = Movie::whereIn('name', $movies)->pluck('id');
            $character->movies()->attach($movieIds);
        }
    }
}

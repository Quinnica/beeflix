<?php

use Illuminate\Database\Seeder;

class Episode extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Matilda
        DB::table('episodes')->insert([
            'movie_id' => 1,
            'episode' => 'Film',
            'title' => 'Movie',
        ]);

        //Gnome Alone
        DB::table('episodes')->insert([
            'movie_id' => 2,
            'episode' => 'Film',
            'title' => 'Movie',
        ]);

        //LooLoo Kids
        DB::table('episodes')->insert([
            'movie_id' => 3,
            'episode' => 'Episode 1',
            'title' => 'Lullaby',
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 3,
            'episode' => 'Episode 2',
            'title' => 'Goodnight',
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 3,
            'episode' => 'Episode 3',
            'title' => 'Sleep Tight',
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 3,
            'episode' => 'Episode 4',
            'title' => 'Love You',
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 3,
            'episode' => 'Episode 5',
            'title' => 'My Family',
        ]);

        //We Bare Bears
        DB::table('episodes')->insert([
            'movie_id' => 4,
            'episode' => 'Season 4, Episode 36',
            'title' => 'Snake Babies',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 4,
            'episode' => 'Season 4, Episode 35',
            'title' => 'Fire!; Snake Babies; Pandas Birthday; Googs; Go Fish Part 3',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 4,
            'episode' => 'Season 4, Episode 34',
            'title' => 'Ranger Norm',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 4,
            'episode' => 'Season 4, Episode 33',
            'title' => 'Tabes & Charlie',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 4,
            'episode' => 'Season 4, Episode 32',
            'title' => 'Band of Outsiders',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 4,
            'episode' => 'Season 4, Episode 31',
            'title' => 'Tabes & Charlie; Cousin Jon; Ranger Norm; The Mummys Curse Part 1',
        ]);

        //The Notebook
        DB::table('episodes')->insert([
            'movie_id' => 5,
            'episode' => 'Film',
            'title' => 'Movie',
        ]);

        //Gone Girl
        DB::table('episodes')->insert([
            'movie_id' => 6,
            'episode' => 'Film',
            'title' => 'Movie',
        ]);

        //My Secret Romance
        DB::table('episodes')->insert([
            'movie_id' => 7,
            'episode' => 'E13',
            'title' => 'Episode 13',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 7,
            'episode' => 'E14',
            'title' => 'Episode 14',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 7,
            'episode' => 'E15',
            'title' => 'Episode 15',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 7,
            'episode' => 'E16',
            'title' => 'Episode 16',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 7,
            'episode' => 'E17',
            'title' => 'Episode 17',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 7,
            'episode' => 'E18',
            'title' => 'Episode 18',
        ]);

        //The Stepfather
        DB::table('episodes')->insert([
            'movie_id' => 8,
            'episode' => 'Film',
            'title' => 'Movie',
        ]);

        //You
        DB::table('episodes')->insert([
            'movie_id' => 9,
            'episode' => 'Season 2, Episode 1',
            'title' => 'A Fresh Start',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 9,
            'episode' => 'Season 2, Episode 2',
            'title' => 'Just the Tip',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 9,
            'episode' => 'Season 2, Episode 3',
            'title' => 'What Are Friends For?',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 9,
            'episode' => 'Season 2, Episode 4',
            'title' => 'The Good, the Bad, & the Hendy',
        ]);

        //Alex and Katie
        DB::table('episodes')->insert([
            'movie_id' => 10,
            'episode' => 'Season 4, Episode 1',
            'title' => 'Last First Day',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 10,
            'episode' => 'Season 4, Episode 2',
            'title' => 'Rules for Better Barista-ing',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 10,
            'episode' => 'Season 4, Episode 3',
            'title' => 'The Girl Who Cried Yelp',
        ]);
        //Go live your way
        DB::table('episodes')->insert([
            'movie_id' => 11,
            'episode' => 'Coming Soon',
            'title' => 'Coming Soon',
        ]);
        //a series
        DB::table('episodes')->insert([
            'movie_id' => 12,
            'episode' => 'Season 3, Episode 1',
            'title' => 'Slippery Slope: Part 1',
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 12,
            'episode' => 'Season 3, Episode 2',
            'title' => 'Slippery Slope: Part 2',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 12,
            'episode' => 'Season 3, Episode 3',
            'title' => 'Slippery Slope: Part 3',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 12,
            'episode' => 'Season 3, Episode 4',
            'title' => 'Slippery Slope: Part 4',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 12,
            'episode' => 'Season 3, Episode 5',
            'title' => 'Slippery Slope: Part 5',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 12,
            'episode' => 'Season 3, Episode 6',
            'title' => 'Slippery Slope: Part 6',
        ]);
    }
}

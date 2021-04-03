<?php

use Illuminate\Database\Seeder;

class Movie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Kids
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Matilda',
            'photo' => 'https://occ-0-64-58.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABXe9I9RFAdei-OFh_woK2rgue8g5moBKgMol2TFRJa-5bf2RQukq0oRjWhOSDocqaIyI4-bNS1P2CNbqxsZZb3nejyk.webp?r=4a0',
            'description' => 'Matilda shares a home with her parents and brother, who do not appreciate her.',
            'rating' => 5,
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Gnome Alone',
            'photo' => 'https://occ-0-64-58.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQFpAhXgVDIR6SumeJPDbMMR-huRpfOw8Z79k5x6kmBZXY5ohT7t4vIWXfQSyAWT4J0E1vfMg4es9PS7bVitYP1w5afYS8Y-7ABIAX1jQEsBRjrwq2-z3KW3bCnx.webp?r=aa5',
            'description' => 'A teenage girl moves into a new house in a new town and discovers her house is under attack by underground beasts. After making the discovery, she finds that she and the house gnomes are the only ones who can offer protection.',
            'rating' => 4,
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'LooLoo Kids',
            'photo' => 'https://occ-0-64-58.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZAVWA28J35FRhe93apmUPcR6k_AeAmfHCEEuMPBSsW9F4s-Kb2kefNBKRnaEbk238X_FKw2NkU-1NMtdHujTL1qUas.webp?r=f2d',
            'description' => 'Nursery Rhymes',
            'rating' => 5,
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'We Bare Bears',
            'photo' => 'https://occ-0-64-58.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABax-PqiKg7ivnkVRMy9-l_cZVrMnp0eK2nQqqsaE3bOO_gr04c05sOGJ5aqy_AS5xNjuLQxJJf8w0DORqdQ1NaeilyY.webp?r=750',
            'description' => 'Three brother bears awkwardly attempt to find their place in civilized society, whether theyre looking for food, trying to make human friends, or scheming to become famous on the internet.',
            'rating' => 3,
        ]);

        //Drama
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'The Notebook',
            'photo' => 'https://occ-0-64-58.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZWO_qxe31r05JntbhAys16Nfm0phC4uH7iVNMeEgGz3BQRzO7tuWLnTdGSUK5vTecXh6DohCjqh_1LBropo9T-3ayU.jpg?r=6c9',
            'description' => 'Duke reads the story of Allie and Noah, two lovers who were separated by fate, to Ms Hamilton, an old woman who suffers from dementia, on a daily basis out of his notebook.',
            'rating' => 5,
        ]);
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Gone Girl',
            'photo' => 'https://occ-0-64-58.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYFsj9sJ4hVHryxwrh7zt_NwbBH0FdSKXud-5zR7PDWiXyqe3TmnGtPpwldwvtiWTqMaJhTBTJmpQs9AGfO7M3DFdso.jpg?r=d37',
            'description' => 'Nick Dunne discovers that the entire media focus has shifted on him when his wife, Amy Dunne, mysteriously disappears on the day of their fifth wedding anniversary.',
            'rating' => 4,
        ]);
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'My Secret Romance',
            'photo' => 'https://occ-0-64-58.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbNhJYICeDgDIYSfMXZicxB7ZXnlIgi2-MVOupRn9HrzF5speD1AGGtPqJLxVi2u6kq1Mew6kZPnD773fFA7WpLW1DM.jpg?r=d97',
            'description' => 'Jin-wook and Yoo-mi meet at a Gangwon-do resort and get caught up in a series of misunderstandings and accidents.',
            'rating' => 3,
        ]);
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'The Stepfather',
            'photo' => 'https://occ-0-64-58.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYIxvlIbN7Gnuz6KsVfp5Cu0jGdOuO4ktWCmoGpBXJcFQZuGeJQid6lSMDObRfbNJsTDUO1cIUb0zsbmtwNb-D4t6K8.jpg?r=fff',
            'description' => 'Michael returns home from military school and finds his mother happily in love and living with her new boyfriend.',
            'rating' => 5,
        ]);

        //TV Shows
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'YOU',
            'photo' => 'https://occ-0-64-58.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABdgNE45JopKnivq3OcxeZpDZskYhivp_8Ek9fjb0RFjnZmkOF94QgdYX7JKfF60xiFDrar4LQLOzt5NWp3JpUbFujwHnqyNboAyQ8p8TlsLrajO-Si7YGP-zJe0q.jpg?r=701',
            'description' => 'What would you do for love? For a brilliant male bookstore manager who crosses paths with an aspiring female writer, this question is put to the test.',
            'rating' => 5,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Alex and Katie',
            'photo' => 'https://occ-0-64-58.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABaoekQDSYwM_fm4z6yoZULXiwHPnI_NBSR4tHdhwa1zB-j18Q57X0MxwI3td-Aqtv3Lk27F7hXUjwRCGMkoSaxVZONROcweTeNOD-mR8S90JdXWCsDSpfVgeYUvK.jpg?r=967',
            'description' => 'High school is hard for all students, but its even more difficult for somebody who is dealing with personal challenges that most teens dont.',
            'rating' => 2,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Go Live Your Way',
            'photo' => 'https://occ-0-64-58.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABdD1HXSQ1WH1eImp4O5WrfOmg1gM1itDn-CVJxHmq9hiMmDB-eT2F8qmH--PtBCEp3jr9PPaS8PTMjwEeO2lV14f7bhUHEJtxFnCWzyfx4R7ze5bWrGx-ohB_bT5.jpg?r=a9d',
            'description' => 'Fiercely talented Mia earns a scholarship to an elite performing arts school, where she soon clashes with the owners fashionable and popular daughter.',
            'rating' => 4,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'A Series of unfortunate events',
            'photo' => 'https://occ-0-64-58.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZQhXLaFj0_C2UOuJZnMoDocqM8s4jpU0XPZ9Ag8iJiH_IU0PJJAjmSCiF3qkNACngAt7ucX5WNJGNxgD4qhqz6MvRqqdGmB8RR-iEEFuEoccRGVI8RMEctseFAt.jpg?r=213',
            'description' => 'This series follows the tragic tale of three orphans -- Violet, Klaus, and Sunny Baudelaire -- who are investigating their parents mysterious death.',
            'rating' => 5,
        ]);
    }
}

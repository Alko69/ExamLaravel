<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('characters')->insert([
            'name' => 'Schtroump Grognon',
            'comic' => 'Les Schtroumpfs',
            'creation_year' => '1973',
            'cartoonist_id' => 3
        ]);

        DB::table('characters')->insert([
            'name' => 'Goku',
            'comic' => 'Dragon Ball',
            'creation_year' => '1997',
            'cartoonist_id' => 2
        ]);

        DB::table('characters')->insert([
            'name' => 'Mickey',
            'comic' => 'Les Aventures De Mickey',
            'creation_year' => '1997',
            'cartoonist_id' => 1
        ]);

        DB::table('characters')->insert([
            'name' => 'Arale',
            'comic' => 'Dr Slump',
            'creation_year' => '1980',
            'cartoonist_id' => 2
        ]);
    }
}

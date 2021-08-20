<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartoonistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cartoonists')->insert([
            'name' => 'Walt Disney',
            'nationality' => 'Américain',
            'birth_year' => '1901',
        ]);

        DB::table('cartoonists')->insert([
            'name' => 'Akira Toriyama',
            'nationality' => 'Japonais',
            'birth_year' => '1955',
        ]);

        DB::table('cartoonists')->insert([
            'name' => 'Peyo',
            'nationality' => 'Belge',
            'birth_year' => '1928',
        ]);
    }
}

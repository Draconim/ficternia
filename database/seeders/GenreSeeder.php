<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create(['name'=>'Fantasy','description'=>'a']);
        Genre::create(['name'=>'Horror','description'=>'a']);
        Genre::create(['name'=>'Action','description'=>'a']);
        Genre::create(['name'=>'Romance','description'=>'a']);
    }
}

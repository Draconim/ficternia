<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\subGenre;

class subGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        subGenre::create(['genre_id' => '1', 'name'=>'High Fantasy','description'=>'']);
        subGenre::create(['genre_id' => '1', 'name'=>'Low Fantasy','description'=>'']);
        subGenre::create(['genre_id' => '1', 'name'=>'Dark Fantasy','description'=>'']);
        subGenre::create(['genre_id' => '1', 'name'=>'Fables','description'=>'']);
        subGenre::create(['genre_id' => '2', 'name'=>'Gothic','description'=>'']);
        subGenre::create(['genre_id' => '2', 'name'=>'Paranormal','description'=>'']);
        subGenre::create(['genre_id' => '2', 'name'=>'Splatterpunk','description'=>'']);
        subGenre::create(['genre_id' => '4', 'name'=>'Historical romance','description'=>'']);
        subGenre::create(['genre_id' => '4', 'name'=>'Inspirational romance','description'=>'']);
        subGenre::create(['genre_id' => '4', 'name'=>'Young adult','description'=>'']);
    }
}

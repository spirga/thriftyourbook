<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create(['genre' => 'Fiction']);
        Genre::create(['genre' => 'Mystery']);
        Genre::create(['genre' => 'Young Adult']);
        Genre::create(['genre' => 'Romance']);
        Genre::create(['genre' => 'Thriller']);
        Genre::create(['genre' => 'Horror']);
        Genre::create(['genre' => 'Classics']);
        Genre::create(['genre' => 'Historical']);
        Genre::create(['genre' => 'Science Fiction']);
        Genre::create(['genre' => 'Contemporary']);
        Genre::create(['genre' => 'Self Help']);
        Genre::create(['genre' => 'Fantasy']);
        Genre::create(['genre' => 'Manga']);
        Genre::create(['genre' => 'Childrens']);
        Genre::create(['genre' => 'Poetry']);
        Genre::create(['genre' => 'Textbooks']);
        Genre::create(['genre' => 'Non-fiction']);
        Genre::create(['genre' => 'Other']);
    }
}
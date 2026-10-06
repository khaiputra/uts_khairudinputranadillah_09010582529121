<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $tek   = Category::where('name', 'Teknologi')->first();
        $nov   = Category::where('name', 'Novel')->first();
        $sains = Category::where('name', 'Sains')->first();
        $sej   = Category::where('name', 'Sejarah')->first();

        $tek->books()->create(['title' => 'Belajar Laravel untuk Pemula', 'author' => 'Andi Wijaya',   'publisher' => 'Informatika', 'year' => 2022, 'stock' => 10]);
        $tek->books()->create(['title' => 'Dasar Pemrograman Web',        'author' => 'Siti Rahma',    'publisher' => 'Andi Offset', 'year' => 2021, 'stock' => 7]);
        $nov->books()->create(['title' => 'Laskar Pelangi',               'author' => 'Andrea Hirata', 'publisher' => 'Bentang',     'year' => 2005, 'stock' => 5]);
        $sains->books()->create(['title' => 'Fisika Dasar',               'author' => 'Halliday',      'publisher' => 'Erlangga',    'year' => 2010, 'stock' => 8]);
        $sej->books()->create(['title' => 'Sejarah Indonesia Modern',     'author' => 'M.C. Ricklefs', 'publisher' => 'Serambi',     'year' => 2008, 'stock' => 4]);
    }
}

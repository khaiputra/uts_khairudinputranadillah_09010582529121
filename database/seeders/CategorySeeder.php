<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Teknologi', 'description' => 'Buku seputar komputer dan pemrograman'],
            ['name' => 'Novel',     'description' => 'Buku fiksi dan cerita'],
            ['name' => 'Sains',     'description' => 'Buku ilmu pengetahuan alam'],
            ['name' => 'Sejarah',   'description' => 'Buku sejarah dan biografi'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => 'Мебель для дачи',
            'slug' =>  Str::slug('Мебель для дачи'),
            'page_title' =>  Str::slug('Мебель для дачи'),
            'page_description' => Str::slug('Каталог мебели для дачи'),
            'keywords' => Str::slug('мебель, дача, садовая мебель'),
        ]);

        Category::create([
            'title' => 'Мебель для дома',
            'slug' => ('Мебель для дома'),
            'page_title' => ('Мебель для дома'),
            'page_description' => ('Каталог мебели для дома'),
            'keywords' =>('мебель, дом, интерьер'),
        ]);
    }
}
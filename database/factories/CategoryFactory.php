<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>'Мебель для дачи',
            'created_at'=>now(),
            'slug' => fn(array $attributes)=> Str::slug($attributes['title']),
            'page_title' =>  fn(array $attributes)=> $attributes['title'],
            'page_description' =>  fn(array $attributes)=> $attributes['title'],
            'keywords' => fn(array $attributes)=>$attributes['title']
        ];
    }}

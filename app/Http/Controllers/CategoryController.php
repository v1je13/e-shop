<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        $title = 'Категории - Интернет-магазин';
        $description = 'Каталог категорий товаров интернет-магазина';
        return view('categories.index', compact('categories', 'title', 'description'));
    }

   
    public function show(Category $category)
    {
        $title = $category->title . ' - Интернет-магазин';
        $description = 'Товары категории ' . $category->title;
        return view('categories.show', compact('category', 'title', 'description'));
    }
}

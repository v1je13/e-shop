<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); 
        
        $categories = Category::where('id','>=',1)
                        ->orderBy('title','DESC')
                        ->get();
        
        $title = 'Каталог товаров - Интернет-магазин';
        $description = 'Каталог всех товаров интернет-магазина';
        return view('products.index', compact('products','categories','title','description'));
    }
    public function create()
    {
        $categories = Category::all();
        $title = 'Создать товар - Интернет-магазин';
        $description = 'Форма создания нового товара';
        return view('products.create', compact('categories','title','description'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'string|required',
            'price' => 'decimal:0,2|max:100000|min:0|required',
            'description' => 'string|required',
            'category_id' => 'exists:categories,id|required'
        ]);
        
        $data['slug'] = Str::slug($data['title']);
        
        Product::create($data);
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        $title = $product->title . ' - Интернет-магазин';
        $description = $product->description;
        return view('products.show', compact('product','title','description'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $title = 'Редактировать ' . $product->title . ' - Интернет-магазин';
        $description = 'Форма редактирования товара';
        return view('products.edit', compact('product','categories','title','description'));
    }
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => 'string|required',
            'price' => 'decimal:0,2|max:100000|min:0|required',
            'description' => 'string|required',
            'category_id' => 'exists:categories,id|required'
        ]);
        
        $data['slug'] = Str::slug($data['title']);
        
        $product->update($data);
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

}

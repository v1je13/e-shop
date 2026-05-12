<x-main-layout 
    :title="$category->page_title" 
    :description="$category->page_description" 
    :keywords="$category->keywords"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-semibold text-gray-900 mb-8">{{ $category->title }}</h1>
        
       
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($category->products as $product)
                <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                   
                    <div class="aspect-square bg-gray-100">
                        <img src="{{ Vite::asset($product->path_img) }}" alt="{{ $product->title }}" class="w-full h-full object-cover">
                    </div>
                    
                    <div class="p-4">
                    
                        <h3 class="font-medium text-gray-900 mb-2 line-clamp-1">{{ $product->title }}</h3>
                        
                        
                        <p class="text-lg font-semibold text-gray-900 mb-4">{{ number_format($product->price, 0, ',', ' ') }} ₽</p>
                        
                    
                        <a href="{{ route('products.show', $product) }}" class="block w-full text-center px-4 py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-700 transition">
                            Просмотреть
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-main-layout>

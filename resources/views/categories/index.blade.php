<x-main-layout title="Категории - Интернет-магазин">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-semibold text-gray-900 mb-8">Категории товаров</h1>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($categories as $category)
                <a href="{{ route('categories.show', $category) }}" class="block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-shadow">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $category->title }}</h2>
                    <p class="text-gray-600">{{ $category->products->count() }} товаров</p>
                </a>
            @endforeach
        </div>
    </div>
</x-main-layout>

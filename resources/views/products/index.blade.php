<x-main-layout title="Каталог товаров - E-Shop">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-semibold text-gray-900 mb-8">Каталог товаров</h1>

        @foreach ($categories as $category)
            <section class="mb-12">
                <h2 class="text-lg font-medium text-gray-500 mb-6 pb-2 border-b border-gray-200">
                    {{ $category->title }}
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach ($category->products as $product)
                        <article class="group bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-200">
                            <a href="{{ route('products.show', $product) }}" class="block">
                                <div class="aspect-square bg-gray-100 overflow-hidden">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="{{ Vite::asset($product->path_img) }}" alt="{{ $product->title }}">
                                </div>
                                <div class="p-4">
                                    <h3 class="font-medium text-gray-900 mb-1 line-clamp-1">{{ $product->title }}</h3>
                                    <p class="text-sm text-gray-500 line-clamp-2 mb-3">{{ $product->description }}</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-lg font-semibold text-gray-900">{{ number_format($product->price, 0, ',', ' ') }} ₽</span>
                                        <span class="text-xs text-gray-400">{{ $product->category->title }}</span>
                                    </div>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>
            </section>
        @endforeach
    </div>
</x-main-layout>
   
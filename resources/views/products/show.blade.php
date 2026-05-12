<x-main-layout
    :title="$product->page_title"
    :description="$product->page_description"
    :keywords="$product->keywords">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <a href="{{ route('categories.show', $product->category) }}" class="inline-flex items-center text-sm text-gray-500 hover:text-gray-900 mb-6">
            Назад в категорию
        </a>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <div class="bg-gray-100 rounded-2xl overflow-hidden aspect-square">
                <img src="{{ Vite::asset($product->path_img) }}" alt="{{ $product->title }}" class="w-full h-full object-cover">
            </div>

            <div class="flex flex-col">

                <h1 class="text-3xl font-semibold text-gray-900 mb-4">{{ $product->title }}</h1>


                <p class="text-gray-600 mb-6">{{ $product->description }}</p>


                <p class="text-3xl font-bold text-gray-900 mb-8">{{ number_format($product->price, 0, ',', ' ') }} ₽</p>


                <form action="{{ route('order.add-item') }}" method="POST" class="mt-auto flex items-center gap-4">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                    <!-- Количество -->
                    <div class="flex items-center border border-gray-300 rounded-lg">
                        <label for="quantity" class="px-3 text-sm text-gray-600">Количество:</label>
                        <input type="number"
                            id="quantity"
                            name="quantity"
                            value="1"
                            min="1"
                            class="w-16 py-2 text-center border-l border-gray-300 focus:outline-none">
                    </div>

                    <!-- Кнопка отправки -->
                    <button type="submit"
                        class="flex-1 px-6 py-3 bg-gray-800 text-white font-medium rounded-lg hover:bg-gray-700 transition">
                        Купить
                    </button>
                    </form>
            </div>
        </div>
    </div>
</x-main-layout>
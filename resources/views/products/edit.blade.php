<x-main-layout title="Редактировать продукт"   description="Здесь можно отредактировать продукт">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <a href="{{ route('products.show', $product) }}" class="inline-flex items-center text-sm text-gray-500 hover:text-gray-900 mb-6">
            ← Назад к товару
        </a>

        <div class="bg-white rounded-2xl border border-gray-200 p-8">
            <h1 class="text-2xl font-semibold text-gray-900 mb-6">Редактировать товар</h1>

            <form method="POST" action="{{ route('products.update', $product) }}" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Название</label>
                    <input type="text" name="title" id="title" value="{{ $product->title }}" required
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-gray-900 outline-none transition">
                </div>

                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Цена</label>
                    <input type="number" step="any" name="price" id="price" value="{{ $product->price }}" required
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-gray-900 outline-none transition">
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Описание</label>
                    <textarea name="description" id="description" required rows="4"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-gray-900 outline-none transition resize-none">{{ $product->description }}</textarea>
                </div>

                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Категория</label>
                    <select name="category_id" id="category_id"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-gray-900 focus:border-gray-900 outline-none transition bg-white">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="flex gap-3 pt-4">
                    <button type="submit" class="flex-1 px-6 py-3 bg-gray-900 text-white font-medium rounded-xl hover:bg-gray-800 transition">
                        Сохранить изменения
                    </button>
                    <a href="{{ route('products.show', $product) }}" class="px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-xl hover:bg-gray-200 transition">
                        Отмена
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-main-layout>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Интернет-магазин' }}</title>
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="description" content="{{ $description ?? '' }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900">
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Логотип интернет-магазина -->
                <a href="/" class="text-xl font-semibold text-gray-900">
                    Интернет-магазин
                </a>
                <!-- Меню из трех пунктов -->
                <nav class="flex items-center gap-6">
                    <a href="/" class="text-sm font-medium text-gray-600 hover:text-gray-900">Главная</a>
                    <a href="{{ route('products.index') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900">Каталог</a>
                    <a href="/contacts" class="text-sm font-medium text-gray-600 hover:text-gray-900">Контакты</a>
                </nav>
                
                <!-- Форма поиска по сайту -->
                <form class="flex items-center">
                    <input type="text" placeholder="Поиск..." class="px-3 py-1.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:border-gray-500">
                    <button type="submit" class="ml-2 px-3 py-1.5 bg-gray-800 text-white rounded-lg text-sm hover:bg-gray-700">Найти</button>
                </form>
                
                <!-- Логотип корзины -->
                <a href="/cart" class="text-gray-600 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </a>
            </div>
        </div>
    </header>

    <main class="min-h-[calc(100vh-8rem)]">
        {{ $slot }}
    </main>

    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Меню из списка категорий -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 mb-4">Категории</h3>
                    <ul class="space-y-2">
                        @foreach (\App\Models\Category::all() as $category)
                            <li>
                                <a href="{{ route('categories.show', $category) }}" class="text-sm text-gray-600 hover:text-gray-900">
                                    {{ $category->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Копирайт -->
                <div class="md:text-right">
                    <p class="text-sm text-gray-500">
                        © {{ date('Y') }} Интернет-магазин.<br>Все права защищены.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
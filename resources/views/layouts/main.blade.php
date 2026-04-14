<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <meta name="keywords" content="{{$keywords}}">
    <meta name="description" content="{{$description}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
     <header class="flex justify-between">
        <h1>Интернет-магазин</h1>
        <nav>
            <ul class="flex gap-4">
                <li><a href="{{route('products.index')}}">Главная</a></li>
                <li><a href="{{route('products.create')}}">Создать продукт</a></li>
            </ul>
        </nav>
    </header>
    <main>
        {{$slot}}
    </main>
</body>
</html>
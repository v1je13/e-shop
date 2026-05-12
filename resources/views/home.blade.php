<x-main-layout title="Главная"   description="Здесь описание вашего крутого магазина">
    <section class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Интернет магазин мебели</h1>
                <p class="text-xl text-gray-300 mb-8">Купите пожайлуйста что-нибудь</p>
                <a href="{{ route('products.index') }}" class="inline-block px-6 py-3 bg-white text-gray-900 font-medium rounded-lg hover:bg-gray-100">
                    Перейти в каталог
                </a>
            </div>
        </div>
    </section>


    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-semibold text-gray-900 mb-4">О компании</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Мы продаем мебель. Купите мебель пожалуйста
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-3xl font-bold text-gray-900 mb-2">10000+</div>
                    <p class="text-gray-600">Товаров в каталоге</p>
                </div>
                <div>
                    <div class="text-3xl font-bold text-gray-900 mb-2">0</div>
                    <p class="text-gray-600">Довольных клиентов</p>
                </div>
                <div>
                    <div class="text-3xl font-bold text-gray-900 mb-2">14 лет</div>
                    <p class="text-gray-600">На рынке</p>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>

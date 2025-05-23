<x-layout>
    <div class="max-w-4xl mx-auto mt-16 p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg text-center">
        <h1 class="text-3xl font-extrabold mb-4 text-gray-800 dark:text-white">
            Bienvenue sur votre tableau de bord
        </h1>

        <p class="text-gray-600 dark:text-gray-300 mb-8 text-lg">
            Bonjour <span class="font-semibold text-blue-600 dark:text-blue-400">{{ Auth::user()->full_name }}</span> 👋
        </p>

        <div class="flex justify-center gap-4 flex-wrap">
            <a href="{{ route('car-brands.index') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-md transition shadow">
                Voir les marques
            </a>

            <a href="{{ route('car-brands.create') }}"
                class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-md transition shadow">
                Ajouter une marque
            </a>
        </div>
    </div>
</x-layout>

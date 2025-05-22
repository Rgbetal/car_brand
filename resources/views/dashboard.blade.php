<x-layout>
    <div class="max-w-4xl mx-auto mt-10 text-center">
        <h1 class="text-3xl font-bold mb-4 text-gray-800"> Bienvenue sur votre tableau de bord</h1>

        <p class="text-gray-600 mb-6">Bonjour {{ Auth::user()->name }} 👋</p>

        <div class="space-x-4">
            <a href="{{ route('car-brands.index') }}"
               class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition">
                Voir les marques
            </a>

            <a href="{{ route('car-brands.create') }}"
               class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded transition">
                Ajouter une marque
            </a>
        </div>
    </div>
</x-layout>
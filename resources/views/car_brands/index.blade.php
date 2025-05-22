{{-- resources/views/car_brands/index.blade.php --}}
<x-layout>
    <div class="max-w-4xl mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-6">Liste des marques</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-2 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('car-brands.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
            Ajouter une marque
        </a>

        <table class="w-full table-auto bg-white shadow rounded">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="px-4 py-2">Nom</th>
                    <th class="px-4 py-2">Pays</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($carBrands as $brand)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $brand->name }}</td>
                        <td class="px-4 py-2">{{ $brand->country }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('car-brands.edit', $brand) }}" class="text-blue-600 hover:underline">Modifier</a>
                            <form action="{{ route('car-brands.destroy', $brand) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Supprimer cette marque ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center p-4">Aucune marque trouvée.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>

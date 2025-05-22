<x-layout title="Ajouter une marque">
<div class="max-w-2xl mx-auto mt-10">
    <h1 class="text-xl font-bold mb-4">Ajouter une marque</h1>

    <form method="POST" action="{{ route('car-brands.store') }}" class="space-y-4">
        @csrf
        <input name="name" type="text" placeholder="Nom de la marque" class="w-full border p-2" required>
        <input name="country" type="text" placeholder="Pays" class="w-full border p-2" required>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter</button>
    </form>
</div>
</x-layout>

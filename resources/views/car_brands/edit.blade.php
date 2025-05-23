@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10">
        <h1 class="text-xl font-bold mb-4">Modifier la marque</h1>

        <form method="POST" action="{{ route('car-brands.update', $carBrand) }}" class="space-y-4">
            @csrf
            @method('PUT')
            <input name="name" value="{{ $carBrand->name }}" type="text" placeholder="Nom de la marque"
                class="w-full border p-2" required>
            <input name="country" value="{{ $carBrand->country }}" type="text" placeholder="Pays"
                class="w-full border p-2" required>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Enregistrer</button>
        </form>
    </div>
@endsection

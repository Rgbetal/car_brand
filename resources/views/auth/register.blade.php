<x-layout>
    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul class="list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form method="POST" action="{{ route('register') }}" class="bg-white p-6 rounded shadow w-full max-w-md">
            <h2 class="text-xl font-bold mb-4">Inscription</h2>
            @csrf
            <input type="text" name="full_name" placeholder="Nom complet" class="w-full border mb-3 p-2" required>
            <input type="email" name="email" placeholder="Email" class="w-full border mb-3 p-2" required>
            <input type="password" name="password" placeholder="Mot de passe" class="w-full border mb-3 p-2" required>
            <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe"
                class="w-full border mb-3 p-2" required>
            <button class="bg-green-500 text-white px-4 py-2 w-full">S'inscrire</button>
        </form>
    </div>
</x-layout>

<x-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form method="POST" action="{{ route('login') }}" class="bg-white p-6 rounded shadow w-full max-w-md">
            <h2 class="text-xl font-bold mb-4">Connexion</h2>
            @csrf
            <input type="email" name="email" placeholder="Email" class="w-full border mb-3 p-2" required>
            <input type="password" name="password" placeholder="Mot de passe" class="w-full border mb-3 p-2" required>
            <button class="bg-blue-500 text-white px-4 py-2 w-full">Se connecter</button>
        </form>
    </div>
</x-layout>

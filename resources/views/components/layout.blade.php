<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Mon Application' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 font-sans">
    <nav class="bg-white shadow p-4 mb-6">
        <div class="max-w-7xl mx-auto flex justify-between">
            <a href="{{ url('/') }}" class="text-xl font-bold">Accueil</a>
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">Déconnexion</button>
                </form>
            @endauth
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-4">
        {{ $slot }}
    </main>
</body>

</html>

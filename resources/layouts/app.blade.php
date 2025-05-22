<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mon App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <nav class="bg-white shadow p-4">
        <div class="container mx-auto flex justify-between">
            <a href="{{ url('/') }}" class="font-bold">Accueil</a>
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-red-600">Déconnexion</button>
                </form>
            @endauth
        </div>
    </nav>

    <main class="p-6">
        @yield('content')
    </main>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil - Auto Service</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-sans min-h-screen flex flex-col">

    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold text-gray-900 dark:text-gray-100">Auto Service</a>
            <nav class="flex items-center gap-4 text-sm">

                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                            class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">Déconnexion</button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Connexion</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            S'inscrire
                        </a>
                    @endif
                @endauth
            </nav>
        </div>
    </header>

    <main class="flex-1 flex items-center justify-center px-6">
        <div
            class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <div class="max-w-3xl w-full mx-auto my-6">
                <img src="{{ asset('images/auto.png') }}" alt="Voiture Auto Service"
                    class="rounded-lg shadow-lg w-full h-auto object-cover aspect-[4/3]">
            </div>

            <div class="text-center md:text-left">
                <h2 class="text-3xl font-bold mb-4">Bienvenue chez Auto Service 🚗</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    La voiture à tout prix. Découvrez nos services, ajoutez vos marques préférées et explorez toutes les
                    fonctionnalités disponibles via votre tableau de bord.
                </p>
                <a href="{{ url('/dashboard') }}"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Accéder au Dashboard
                </a>
            </div>

        </div>
    </main>

    <footer class="text-center py-4 text-sm text-gray-500 dark:text-gray-400">
        &copy; {{ date('Y') }} Auto Service. Tous droits réservés.
    </footer>

</body>

</html>

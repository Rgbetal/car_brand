<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Auto Service</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900 min-h-screen">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto">
            <span class="font-bold">Auto Service</span>
            <a href="{{ route('logout') }}" class="float-right">Deconnexion</a>
        </div>
    </nav>

    <main class="p-6">
        @yield('content')
    </main>
</body>

</html>

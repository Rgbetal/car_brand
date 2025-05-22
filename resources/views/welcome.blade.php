<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
            <script src="https://cdn.tailwindcss.com"></script>
 
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else

                        @if (Route::has('register'))
                          <a href="{{ route('register') }}"
    class="inline-block px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">
    S'inscrire
</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
   <div class="min-h-screen bg-white dark:bg-[#0a0a0a] text-[#1b1b18] p-6 lg:p-8">
    <main class="max-w-4xl w-full mx-auto">
        <div class="text-[13px] leading-[20px] p-6 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0_0_0_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0_0_0_1px_#fffaed2d] rounded-lg">
            <h1 class="mb-4 text-xl font-bold">BIENVENUE CHEZ AUTO SERVICE</h1>
            <p class="mb-4 text-[#706f6c] dark:text-[#A1A09A]">
                La voiture à tout prix .<br>Nous vous suggérons de commencer ici.
            </p>

        </div>
    </main>
</div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>Athenas - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen">
    <header class="text-gray-600">
        <div class="container mx-auto flex justify-between items-center p-5 items-center">
            <a class="flex title-font font-medium items-center text-gray-900" href="{{route('person.index')}}">
                <img src="{{url('/logoathenas.png')}}" alt="logo" class="h-12">
            </a>
            <div class="flex items-center">
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 hover:text-gray-900 cursor-pointer" href="/">Inicio</a>
                </nav>
                <a class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base md:mt-0 cursor-pointer" href="/">Criar pessoa
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </header>
    @yield('content')

    <footer class="text-gray-600 fixed bottom-0 left-0 right-0">
        <div class="bg-gray-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">© 2022 —
                    <a href="https://github.com/RafaelPereira7L" class="text-gray-600 ml-1" target="_blank" rel="noopener noreferrer">@RafaelPereira7L</a>
                </p>
                <span class="sm:ml-auto sm:mt-0 mt-2 sm:w-auto w-full sm:text-left text-center text-gray-500 text-sm">Feito com 💜 por <a class="text-blue-500 font-medium" href="https://rafael-dev.tech">RafaelDev</a></span>

            </div>
        </div>
    </footer>
</body>
</html>

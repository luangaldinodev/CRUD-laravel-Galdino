<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tailwind --}}
    @vite('resources/css/app.css')
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
    {{-- Icones --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- Titulo --}}
    <title>CRUD - @yield('title')</title>
</head>

<body class="min-h-screen">

    <header class="bg-indigo-950 shadow-xl">
        <nav class="flex items-center justify-between px-6 py-6">
            <a class="text-white text-2xl font-semibold text-shadow-md flex items-center gap-2" href=" {{ route('raiz') }} "><i
                    class="fa-regular fa-user"></i>
                <h1>CRUD do Galdino</h1>
            </a>
            <ul class="flex items-center justify-between gap-6">
                <li><a class="text-white font-medium hover:underline" href=" {{ route('raiz') }} ">Home</a></li>
                <li><a class="text-white font-medium hover:underline" href=" {{ route('pessoa.index') }} ">Ver Pessoas</a></li>
                <li><a class="text-white font-medium hover:underline" href=" {{ route('pessoa.create') }} ">Resgistrar Pessoa</a></li>
                <li><a class="text-white font-medium hover:underline" href=" {{ route('docs.index') }} ">Documentação</a></li>
            </ul>
        </nav>
    </header>

    @yield('body')

    <script>
        AOS.init();
    </script>
</body>

</html>

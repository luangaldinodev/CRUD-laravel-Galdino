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
            <a class="text-white text-2xl font-semibold text-shadow-md flex items-center gap-2"
                href=" {{ route('raiz') }} "><i class="fa-regular fa-user"></i>
                <h1>CRUD do Galdino</h1>
            </a>
            <ul class="flex items-center justify-between gap-6">
                <li><a class="text-white font-medium hover:underline" href=" {{ route('raiz') }} ">Home</a></li>
                <li><a class="text-white font-medium hover:underline" href=" {{ route('pessoa.index') }} ">Ver
                        Pessoas</a></li>
                <li><a class="text-white font-medium hover:underline" href=" {{ route('pessoa.create') }} ">Resgistrar
                        Pessoa</a></li>
                <li><a class="text-white font-medium hover:underline"
                        href=" {{ route('docs.index') }} ">Documentação</a></li>
            </ul>
        </nav>
    </header>

    @yield('body')

    <footer class="bg-indigo-950 shadow-xl">
        <nav class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-6 pt-12 pb-6 border-b border-indigo-400/50">
            <a class="text-white text-2xl font-semibold text-shadow-md flex items-start gap-2"
                href=" {{ route('raiz') }} "><i class="fa-regular fa-user"></i>
                <h1>CRUD do Galdino</h1>
            </a>
            <ul class="flex flex-col items-start justify-between gap-6">
                <h1 class="text-white text-2xl font-semibold text-shadow-md">Links Rápidos</h1>
                <li><a class="text-white font-medium hover:underline" href=" {{ route('raiz') }} ">Home</a></li>
                <li><a class="text-white font-medium hover:underline" href=" {{ route('pessoa.index') }} ">Ver
                        Pessoas</a></li>
                <li><a class="text-white font-medium hover:underline" href=" {{ route('pessoa.create') }} ">Resgistrar
                        Pessoa</a></li>
                <li><a class="text-white font-medium hover:underline"
                        href=" {{ route('docs.index') }} ">Documentação</a></li>
            </ul>

            <ul class="flex flex-col items-start gap-6 text-white font-medium">
                <h1 class="text-white text-2xl font-semibold text-shadow-md">Contato</h1>
                <li><i class="fa-solid fa-envelope"></i> <a class="text-white font-medium underline" href="mailto: luangaldinodev@gmail.com">luangaldinodev@gmail.com</a></li>
                <li><i class="fa-brands fa-instagram"></i> <a class="text-white font-medium underline" href="https://www.instagram.com/ogaldino.dev/" target="_blank" rel="noopener noreferrer">@ogaldino.dev</a></li>
            </ul>
        </nav>
        <p class="text-center text-white text-lg text-shadow-md mb-2 mt-6">© <?php echo date('Y'); ?> Luan Galdino Goes. Todos os direitos reservados.</p>
        <p class="text-center text-white text-md text-shadow-md pb-8">Feito com ❤ por Luan Galdino | G2A Digital - Marketing & Software</p>


    </footer>

    <script>
        AOS.init();
    </script>
</body>

</html>

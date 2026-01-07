@extends('body')

@section('title', 'Página não encontrada!')

@section('body')

    <section class="fixed inset-0 bg-indigo-950">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-[30rem] font-bold text-white/5">404</h1>
        </div>

        <div class="relative flex h-full flex-col items-center justify-center gap-4">
            <p class="text-6xl font-semibold text-white">Página não encontrada</p>
            <a href="{{ route('raiz') }}"
                class="px-8 py-3 block shadow-md rounded-sm bg-white/10 hover:bg-white/19 text-white font-medium cursor-pointer hover:-translate-y-1 transition delay-50 duration-300 ease-in-out">Voltar</a>
        </div>
    </section>

@endsection

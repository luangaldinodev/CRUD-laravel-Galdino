@extends('body')

@section('title', 'Bem Vindo!')

@section('body')

    <section class="flex min-h-screen items-center bg-linear-to-t from-indigo-0 to-indigo-950">
        {{-- Direita --}}
        <div class="md:w-1/2 py-25 px-12"> 
            <h2 class="font-bold leading-18 text-6xl" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Bem vindo ao <br> CRUD do Galdino</h2>
        </div> {{-- Direita --}}

        <div class="md:w-1/2"> {{-- Esquerda --}}
            <img class="w-88 h-80 -scale-x-100 m-auto" src="images/galdino.png" alt="galdino">
        </div> {{-- Esquerda --}}
    </section>

@endsection

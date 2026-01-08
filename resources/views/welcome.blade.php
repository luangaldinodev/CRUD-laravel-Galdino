@extends('body')

@section('title', 'Bem Vindo!')

@section('body')

    <section class="flex items-center h-120 ">
        {{-- Direita --}}
        <div
            class="bg-indigo-950 py-15 px-12 mx-auto w-5xl rounded-md shadow-2xl flex items-center justify-between overflow-hidden">
            <div>

                <h2 class="font-bold text-white text-6xl text-shadow-xs" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                    data-aos-easing="ease-in-out" data-aos-anchor-placement="center-center">Bem vindo
                    ao <br> CRUD do Galdino
                </h2>

                <p class="mt-6 text-white text-lg" data-aos="fade-up" data-aos-duration="800" data-aos-delay="50"
                    data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">Leia a
                    documentação! </p>

                <div data-aos="fade-up" data-aos-duration="850" data-aos-delay="50" data-aos-easing="ease-in-out"
                    data-aos-anchor-placement="top-bottom">
                    <a href="{{ route('docs.index') }} "
                        class="px-8 py-3 mt-6 inline-block shadow-md rounded-sm bg-white/10 hover:bg-white/19 text-white font-medium cursor-pointer hover:-translate-y-1 transition delay-50 duration-300 ease-in-out">Documentação</a>
                </div>
            </div>

            <img data-aos="fade-right" data-aos-duration="800" data-aos-delay="50" data-aos-easing="ease-in-out"
                src="images/galdino.png" class="w-1/3 -scale-x-100 drop-shadow-2xl mr-10" alt="Foto do Galdino">

        </div>

    </section>

@endsection

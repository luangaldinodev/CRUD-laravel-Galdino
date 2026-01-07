@extends('body')

@section('title', 'Registrar Pessoa')


@section('body')


<section class="bg-linear-to-t from-indigo-950 to-indigo-0 p-1 min-h-screen">
    <form class="w-5xl my-15 mx-auto p-10 bg-indigo-950 rounded-md shadow-lg" action=" {{ route('pessoa.store') }} " method="post">
            
            {!! $mensagem == 'sucesso.store' ? '<p class="text-green-400 text-xl mb-5">Pessoa resgistrada com sucesso!</p>' : '' !!}
            
            <h2 class="text-3xl text-white font-semibold text-shadow-md mb-5">Registrar Pessoa:</h2>

            <div class="grid grid-cols-4 grid-rows-2 gap-3">
                @csrf
                
                <div class="row-span-1 col-span-4">
                    <div class="flex gap-3 items-center">
                        <label class="font-medium text-white" for="nome">Nome:</label>
                        {!! $errors->all() ? '<p class="text-red-400 text-xs">'.$errors->first('nome').'</p>' : '' !!}
                    </div>
                    <input class="w-full p-2 text-white bg-white/5 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" type="text" name="nome" id="nome" value=" {{ old('nome') }} ">
                </div>
    
                <div class="row-span-2 col-start-1 col-end-3">
                    <div class="flex gap-3 items-center">
                        <label class="font-medium text-white" for="email">E-mail:</label>
                        {!! $errors->all() ? '<p class="text-red-400 text-xs">'.$errors->first('email').'</p>' : '' !!}
                    </div>
                    <input class="w-full p-2 text-white bg-white/5 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" type="email" name="email" id="email" value=" {{ old('email') }} ">
                </div>
    
                <div class="row-span-2 col-start-3 col-end-5">
                    <div class="flex gap-3 items-center">
                        <label class="font-medium text-white" for="telefone">Telefone:</label>
                        {!! $errors->all() ? '<p class="text-red-400 text-xs">'.$errors->first('telefone').'</p>' : '' !!}
                    </div>
                    <input class="w-full p-2 text-white bg-white/5 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" type="tel" name="telefone" id="telefone" value=" {{ old('telefone') }} ">
                </div>
                
            </div>

            <input class="px-8 py-3 shadow-md rounded-sm bg-white/5 hover:bg-white/9 text-white font-medium cursor-pointer hover:-translate-y-1 transition delay-50 duration-300 ease-in-out" type="submit" value="Cadastrar">

        </form>
    </section>

@endsection

@extends('body')

@section('title', 'Pessoas')

@section('body')

    <section class="bg-linear-to-t from-indigo-950 to-indigo-0 p-1 min-h-screen">

        <div class="w-5xl my-15 p-10 mx-auto bg-indigo-950 rounded-md shadow-lg">

            @switch($mensagem)

                @case('erro.edit')
                    <p class="text-red-400 text-xl mb-5">Erro ao encontrar Pessoa!</p>
                @break

                @case('sucesso.update')
                    <p class="text-green-400 text-xl mb-5">Pessoa alterada com sucesso!</p>
                @break

                @case('erro.update')
                    <p class="text-red-400 text-xl mb-5">Erro ao alterar Pessoa!</p>
                @break

                @case('sucesso.destroy')
                    <p class="text-green-400 text-xl mb-5">Pessoa deletada com sucesso!</p>
                @break

                @case('erro.destroy')
                    <p class="text-red-400 text-xl mb-5">Erro ao deletar Pessoa!</p>
                @break

                @default
            @endswitch

            <table class="w-full mx-auto text-left text-white text-shadow-lg">
                <tr class="">
                    <th class="px-3 py-3 outline-1 outline-white/10 -outline-offset-1 rounded-tl-md">Nome</th>
                    <th class="px-3 py-3 outline-1 outline-white/10 -outline-offset-1">E-mail</th>
                    <th class="px-3 py-3 outline-1 outline-white/10 -outline-offset-1 rounded-tr-md">Telefone</th>
                    <th class="px-3 py-3">Editar</th>
                    <th class="px-3 py-3">Excluir</th>
                </tr>
                @foreach ($pessoas as $pessoa)
                    <tr class="">
                        <td class="px-3 py-1 outline-1 outline-white/10 -outline-offset-1">{{ $pessoa->nome }}</td>
                        <td class="px-3 py-1 outline-1 outline-white/10 -outline-offset-1">{{ $pessoa->email }}</td>
                        <td class="px-3 py-1 outline-1 outline-white/10 -outline-offset-1">{{ $pessoa->telefone }}</td>
                        <td class="px-3 py-1"><a
                                class="px-1 py-2 mx-auto block shadow-md rounded-sm bg-green-400/25 hover:bg-green-400/75 text-white text-center font-medium cursor-pointer hover:-translate-y-1 transition delay-50 duration-300 ease-in-out"
                                href=" {{ route('pessoa.edit', $pessoa->id) }}">Editar</td>
                        <td class="px-3 py-1"><a
                                class="px-1 py-2 mx-auto block shadow-md rounded-sm bg-red-400/25 hover:bg-red-400/75 text-white text-center font-medium cursor-pointer hover:-translate-y-1 transition delay-50 duration-300 ease-in-out"
                                href=" {{ route('pessoa.destroy', $pessoa->id) }}"> Excluir</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>

@endsection

@extends('body')

@section('title', 'Documentação')


@section('body')


    <section class="font-medium">
        <div class="bg-indigo-950 px-10 py-5 m-10 rounded-md shadow-lg">
            <h2 class="text-white font-semibold text-4xl text-shadow-2xs">Documentação</h2>
            <p class="text-white mt-2">Bem-vindo à documentação do nosso sistema!</p>
        </div>

        <div
            class="px-10 py-5 m-10 rounded-md shadow-xl hover:shadow-violet-300 transition delay-50 duration-300 ease-in-out">
            <h2 class="text-indigo-950 font-bold text-4xl text-shadow-2xs mb-5">Sobre o Projeto</h2>
            <p>O projeto em questão foi desenvolvido para a fixação dos conteúdos adquiridos por mim Luan Galdino, no curso
                Desenvolvimento Web Avançado com PHP, Laravel e Vue.JS por Jorge Sant Ana</p>
        </div>

        <div
            class="px-10 py-5 m-10 rounded-md shadow-xl hover:shadow-violet-300 transition delay-50 duration-300 ease-in-out">
            <h2 class="text-indigo-950 font-bold text-4xl text-shadow-2xs mb-5">Stack Utilizada</h2>
            <p class="text-lg">Front-end:</p>
            <ul class="mt-2 pb-5 border-b border-indigo-950/50">
                <li class="list-disc list-inside">Blade</li>
                <li class="list-disc list-inside">TailwindCSS</li>
                <li class="list-disc list-inside">AOS Animate On Scroll Library</li>
            </ul>
            <p class="text-lg mt-5">Back-end:</p>
            <ul class="mt-2 ">
                <li class="list-disc list-inside">Laravel 12</li>
                <li class="list-disc list-inside">MySQL</li>
            </ul>
        </div>

        <div
            class="px-10 py-5 m-10 rounded-md shadow-xl hover:shadow-violet-300 transition delay-50 duration-300 ease-in-out">
            <h2 class="text-indigo-950 font-bold text-4xl text-shadow-2xs mb-5">Rotas</h2>

            <table class="w-full mx-auto text-left text-black">

                <tr class="">
                    <th class="px-3 py-3 border border-indigo-950/20 rounded-2xl">Verbo</th>
                    <th class="px-3 py-3 border border-indigo-950/20">URI</th>
                    <th class="px-3 py-3 border border-indigo-950/20">Action</th>
                    <th class="px-3 py-3 border border-indigo-950/20">Route Name</th>
                </tr>

                <tr class="">
                    <td class="px-3 py-1 border border-indigo-950/20">GET</td>
                    <td class="px-3 py-1 border border-indigo-950/20">/</td>
                    <td class="px-3 py-1 border border-indigo-950/20">View</td>
                    <td class="px-3 py-1 border border-indigo-950/20">raiz</td>
                </tr>

                <tr class="">
                    <td class="px-3 py-1 border border-indigo-950/20">GET</td>
                    <td class="px-3 py-1 border border-indigo-950/20">/pessoa</td>
                    <td class="px-3 py-1 border border-indigo-950/20">Index</td>
                    <td class="px-3 py-1 border border-indigo-950/20">pessoa.index</td>
                </tr>

                <tr class="">
                    <td class="px-3 py-1 border border-indigo-950/20">GET</td>
                    <td class="px-3 py-1 border border-indigo-950/20">/pessoa/create/{mensagem?}</td>
                    <td class="px-3 py-1 border border-indigo-950/20">Create</td>
                    <td class="px-3 py-1 border border-indigo-950/20">pessoa.create</td>
                </tr>

                <tr class="">
                    <td class="px-3 py-1 border border-indigo-950/20">POST</td>
                    <td class="px-3 py-1 border border-indigo-950/20">/pessoa/store</td>
                    <td class="px-3 py-1 border border-indigo-950/20">Store</td>
                    <td class="px-3 py-1 border border-indigo-950/20">pessoa.store</td>
                </tr>

                <tr class="">
                    <td class="px-3 py-1 border border-indigo-950/20">GET</td>
                    <td class="px-3 py-1 border border-indigo-950/20">/pessoa/{id}/edit/{mensagem?}</td>
                    <td class="px-3 py-1 border border-indigo-950/20">Edit</td>
                    <td class="px-3 py-1 border border-indigo-950/20">pessoa.edit</td>
                </tr>

                <tr class="">
                    <td class="px-3 py-1 border border-indigo-950/20">POST</td>
                    <td class="px-3 py-1 border border-indigo-950/20">/pessoa/update</td>
                    <td class="px-3 py-1 border border-indigo-950/20">Update</td>
                    <td class="px-3 py-1 border border-indigo-950/20">pessoa.update</td>
                </tr>

                <tr class="">
                    <td class="px-3 py-1 border border-indigo-950/20">GET</td>
                    <td class="px-3 py-1 border border-indigo-950/20">/pessoa/delete/{id}</td>
                    <td class="px-3 py-1 border border-indigo-950/20">Destroy</td>
                    <td class="px-3 py-1 border border-indigo-950/20">pessoa.destroy</td>
                </tr>

                <tr class="">
                    <td class="px-3 py-1 border border-indigo-950/20">GET</td>
                    <td class="px-3 py-1 border border-indigo-950/20">/docs</td>
                    <td class="px-3 py-1 border border-indigo-950/20">View</td>
                    <td class="px-3 py-1 border border-indigo-950/20">docs.index</td>
                </tr>

                <tr class="">
                    <td class="px-3 py-1 border border-indigo-950/20">GET</td>
                    <td class="px-3 py-1 border border-indigo-950/20">falback</td>
                    <td class="px-3 py-1 border border-indigo-950/20">View</td>
                    <td class="px-3 py-1 border border-indigo-950/20">---</td>
                </tr>

            </table>
        </div>

        <div
            class="px-10 py-5 m-10 rounded-md shadow-xl hover:shadow-violet-300 transition delay-50 duration-300 ease-in-out">
            <h2 class="text-indigo-950 font-bold text-4xl text-shadow-2xs mb-5">Estrutura do Banco de Dados</h2>
            <p class="text-lg mt-5">Tabela: pessoas</p>

            <table class="w-full mx-auto text-center text-black">

                <tr class="">
                    <th class="px-3 py-3 border border-indigo-950/20 rounded-2xl">id</th>
                    <th class="px-3 py-3 border border-indigo-950/20">nome</th>
                    <th class="px-3 py-3 border border-indigo-950/20">email</th>
                    <th class="px-3 py-3 border border-indigo-950/20">telefone</th>
                    <th class="px-3 py-3 border border-indigo-950/20">deleted_at</th>
                    <th class="px-3 py-3 border border-indigo-950/20">timestamps</th>
                </tr>

            </table>
        </div>

        <div
            class="px-10 py-5 m-10 rounded-md shadow-xl hover:shadow-violet-300 transition delay-50 duration-300 ease-in-out">
            <h2 class="text-indigo-950 font-bold text-4xl text-shadow-2xs mb-5">Suporte e Feedback</h2>
            <p>Para suporte ou feedback, mande um e-mail para luangaldinodev@gmail.com ou entre em meu instagram <a class="underline hover:text-indigo-950" href="https://www.instagram.com/ogaldino.dev/" target="_blank" rel="noopener noreferrer">@ogaldino.dev</a> e envie um direct, não esqueça de me seguir :)</p>
        </div>
    </section>

@endsection

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create($mensagem = "")
    {

        return view('pessoa.create', ['mensagem' => $mensagem]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $regrasDeValidacao = [
            'nome' => 'required|max:50|min:3',
            'email' => 'required|email|max:50',
            'telefone' => 'required|max:15|min:9'
        ];

        // TODO: Terminar as mensagens de validações, Email e os minimos.
        $mensagensDeValidacao = [
            'required' => '*O campo :attribute está vazio!',
            'nome.max' => '*O campo Nome precisa ter no máximo 50 caracteres!',
            'email.max' => '*O campo E-mail precisa ter no máximo 50 caracteres!',
            'telefone.max' => '*O campo E-mail precisa ter no máximo 15 caracteres!',
            'nome.min' => '*O campo Nome precisa ter no minimo 3 caracteres!',
            'telefone.min' => '*O campo E-mail precisa ter no minimo 9 caracteres!'
        ];

        $request->validate($regrasDeValidacao, $mensagensDeValidacao);

        Pessoa::create($request->all());

        return redirect()->route('create.pessoa', ['mensagem' => "sucesso"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //retornar view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

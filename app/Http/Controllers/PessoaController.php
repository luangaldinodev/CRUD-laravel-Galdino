<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $mensagem = $request->query('mensagem', '');

        $pessoas = Pessoa::all();

        return view('pessoa.index', ['pessoas' => $pessoas, 'mensagem' => $mensagem]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($mensagem = '')
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

        return redirect()->route('pessoa.create', ['mensagem' => 'sucesso.store']);
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
        $pessoa = Pessoa::find($id);

        if ($pessoa === null) {
            return redirect()->route('pessoa.index', ['mensagem' => 'erro.edit']);
        }

        return view('pessoa.edit', ['pessoa' => $pessoa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id = '')
    {
        $regrasDeValidacao = [
            'nome' => 'required|max:50|min:3',
            'email' => 'required|email|max:50',
            'telefone' => 'required|max:15|min:9'
        ];

        $mensagensDeValidacao = [
            'required' => '*O campo :attribute está vazio!',
            'nome.max' => '*O campo Nome precisa ter no máximo 50 caracteres!',
            'email.max' => '*O campo E-mail precisa ter no máximo 50 caracteres!',
            'telefone.max' => '*O campo E-mail precisa ter no máximo 15 caracteres!',
            'nome.min' => '*O campo Nome precisa ter no minimo 3 caracteres!',
            'telefone.min' => '*O campo E-mail precisa ter no minimo 9 caracteres!'
        ];

        $request->validate($regrasDeValidacao, $mensagensDeValidacao);

        $idPessoa = $request->input('id');

        if ($idPessoa === null) {
            return redirect()->route('pessoa.index', ['mensagem' => 'erro.update']);
        }

        $updatePessoa = [
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone')
        ];

        $pessoa = Pessoa::where('id', $idPessoa)->update($updatePessoa);

        return redirect()->route('pessoa.index', ['mensagem' => 'sucesso.update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pessoa = Pessoa::find($id);

        if ($pessoa === null) {
            return redirect()->route('pessoa.index', ['mensagem' => 'erro.destroy']);
        }

        $pessoa->delete();

        return redirect()->route('pessoa.index', ['mensagem' => 'sucesso.destroy']);
    }
}

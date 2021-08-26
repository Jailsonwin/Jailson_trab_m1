<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Obtendo os dados de todos os pacientes
        $produtos = Produto::all();
        //Chamando a tela e enviando o objeto $pacientes como parametro
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Chamando a tela para o cadastro de pacientes
        return view ('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Criando as regras para validação
        $validateData = $request->validate([
            'tipo'           =>      'required|max:50',
            'modelo'         =>      'required|max:50',
            'marca'          =>      'required|max:50',
            'precoVenda'     =>      'required|max:50',
            'cor'            =>      'required|max:50',
            'peso'           =>      'required|max:50',
            'descricao'      =>      'required|max:200'
        ]);
                // executando o método para a gravação do registro
                $paciente = Produto::create($validateData);
                // redirecionando para a tela principal do módulo
                // de pacientes
                return redirect('/produtos')->with('success','Dados adicionados com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // criando um objeto para receber o resultado
        // da busca de registro/objeto específico
        $produto = Produto::findOrFail($id);
        // retornando a tela de visualização com o
        // objeto recuperado
        return view('produtos.show',compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // criando um objeto para receber o resultado
        // da busca de registro/objeto específico
        $produto = Produto::findOrFail($id);
        // retornando a tela de visualização com o
        // objeto recuperado
        return view('produtos.edit',compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // criando um objeto para testar/aplicar 
        // validações nos dados da requisição
        $validateData = $request->validate([
            'tipo'           =>      'required|max:50',
            'modelo'         =>      'required|max:50',
            'marca'          =>      'required|max:50',
            'precoVenda'     =>      'required|max:50',
            'cor'            =>      'required|max:50',
            'peso'           =>      'required|max:50',
            'descricao'      =>      'required|max:200'
        ]);
        // criando um objeto para receber o resultado
        // da persistência (atualização) dos dados validados 
        Produto::whereId($id)->update($validateData);
        // redirecionando para o diretório raiz (index)
        return redirect('/produtos')->with('success', 
        'Dados atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            // localizando o objeto que será excluído
            $produto = Produto::findOrFail($id);
            // realizando a exclusão
            $produto->delete();
            // redirecionando para o diretório raiz (index)
            return redirect('/produtos')->with('success', 
            'Dados removidos com sucesso!');
    }
}

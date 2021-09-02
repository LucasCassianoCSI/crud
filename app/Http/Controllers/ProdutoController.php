<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Listar todos os produtos
        $produtos = Produto::orderBy('nome', 'ASC')->get(); 
        //dd($produtos);
        return view('produto.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('nome', 'id');
        return view('produto.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'nome.required' => 'O campo nome é obrigatório!',
            'nome.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'descricao.required' => 'O campo descrição é obrigatório!',
            'categoria_id.required' => 'O campo categoria é obrigatório!',
        ];

        $validateData = $request->validate([
            'nome'      => 'required|min:7',
            'descricao' => 'required',
            'categoria_id' => 'required',
        ], $message);
        // $data = $request->all();
        //dd($data);
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->categoria_id = $request->categoria_id;
        $produto->save(); 

        return redirect()->route('produto.index')->with('message',"Produto $produto->nome com sucesso!");

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id); 
        return view('produto.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //Listar todos os produtos
         $categorias = Categoria::pluck('nome', 'id');

        $produto = Produto::findOrFail($id); 
        return view('produto.edit', ['produto' => $produto, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = [
            'nome.required' => 'O campo nome é obrigatório!',
            'nome.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'descricao.required' => 'O campo descrição é obrigatório!',
            'categoria_id.required' => 'O campo categoria é obrigatório!',
        ];

        $validateData = $request->validate([
            'nome'      => 'required|min:7',
            'descricao' => 'required',
            'categoria_id' => 'required',
        ], $message);
        // $data = $request->all();
        //dd($data);
        $produto = Produto::findOrFail($id);
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->categoria_id = $request->categoria_id;
        $produto->save(); 

        return redirect()->route('produto.index')->with('message',"Produto $produto->name Editado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        
        return redirect()->route('produto.index')->with('message','Produto Excluido com sucesso!');
    }
}

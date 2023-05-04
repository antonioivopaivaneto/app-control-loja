<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Estoque;
use App\Models\Produto;
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
        //
        $categorias = Categoria::all();
        $produtos = Produto::where('loja_id',Session('loja_id'))->get();

         return view('app.produto',['categorias' => $categorias,'produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $produto = new Produto;
        $produto->nome = $request->get('nome');
        $produto->preco_custo = $request->get('preco_custo');
        $produto->preco_venda = $request->get('preco_venda');
        $produto->categoria_id = $request->get('categoria_id');
        $produto->estoque = $request->get('quantidade');
        $produto->loja_id = Session('loja_id');

        $produto->save();

        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
       $produto =  Produto::find($id);
       $produto->update($request->all());

       return redirect()->route('produto.index')->with('message','Alterou com sucesso ');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $produto = Produto::findOrFail($id);


        $produto->delete();


        return redirect()->route('produto.index')->with('message','Removeu com sucesso ');
    }
}

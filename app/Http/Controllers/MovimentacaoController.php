<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use App\Models\Movimentacao;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\ProdutoMovimentacao;
use Illuminate\Support\Facades\Session;

class MovimentacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimentacoes = Movimentacao::orderBy('id', 'DESC')->get();
        $produtos = Produto::all();
        return view('app.movimentacao',compact('produtos','movimentacoes'));
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
        //1


        $store = Session('loja_id');
        $user = Session('id_user');
        $motivo = $request->get('motivo');
        $tipo = $request->get('tipo');
        $produto = $request->get('produto');
        $quantidade = $request->get('quantidade');

        $movimentacao = new Movimentacao();

        $movimentacao->user_id = $user;
        $movimentacao->loja_id = $store;
        $movimentacao->tipo = $tipo;
        $movimentacao->motivo = $motivo;
        $movimentacao->produto_id = $produto;
        $movimentacao->quantidade = $quantidade;


        $produto = Produto::find($produto);

        $result = $movimentacao->save();


         if($tipo == "entrada"){
            $produto->estoque += $quantidade;
            $produto->update();

         }elseif($tipo == "saida"){
            $produto->estoque -= $quantidade;
            $produto->update();


         }else{

         }

         //dd($result);


         $movimentacoes = Movimentacao::all();
         return redirect()->route('movimentacao.index',compact('movimentacoes'));


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
    }

    public function listar(Request $request){

        $data[] = $request->all();
        Session()->put('data', $data);


        Session::push('data', $request->all());

        dd($data);







    }
}

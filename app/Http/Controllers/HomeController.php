<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Estoque;
use App\Models\Loja;
use App\Models\Movimentacao;
use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request);
        $id_loja = $request->get('loja');
        $loja = Loja::where('id',$id_loja)->first();
        $request->session()->put('loja',$loja->nome);
        $request->session()->put('loja_id',$loja->id);





         $categorias = Categoria::all();
         $movimentacoes = Movimentacao::paginate(5);

        return view('app.home',['categorias' => $categorias,'movimentacoes' => $movimentacoes]);
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

    public function home(){

        $categorias = Categoria::with(['Produtos'])->get();
        $total = Produto::where('loja_id',Session('loja_id'))->count();
        $produto_estoque = Produto::where('categoria_id')->where('loja_id',Session('loja_id'))->get();
        $teste = Categoria::withCount('produtos')->get();
        //$prod = Produto::with('estoque')->with('categorias')->where('categoria_id',7)->get() ;

        //echo $prod;
        //dd($produtos_categoria);
        $movimentacoes = Movimentacao::paginate(5);
        return view('app.home',['categorias' => $teste,'total' => $total,'movimentacoes' => $movimentacoes]);
    }
}

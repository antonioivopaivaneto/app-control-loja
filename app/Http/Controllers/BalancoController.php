<?php

namespace App\Http\Controllers;

use App\Models\Movimentacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BalancoController extends Controller
{
    //

    public function index(){
        $movimentacoes = Movimentacao::paginate(5);
        $balanco = DB::table('movimentacoes')
        ->join('produtos', 'produtos.id', '=', 'movimentacoes.produto_id')
        ->where('tipo', '=', 'saida')
        ->where('movimentacoes.loja_id', '=', Session('loja_id') )
        ->get();

         $quant_total_saidas= 0;
         $quant_total_vendas= 0;


        foreach($balanco as $b){
            $quant_total_saidas += $b->quantidade;
            $quant_total_vendas += $b->quantidade * $b->preco_venda;

        }

        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

        $mes =  strftime('%B ', strtotime('today'));



        return view('app.balanco',compact('movimentacoes','quant_total_vendas','quant_total_saidas','mes'));
    }
}

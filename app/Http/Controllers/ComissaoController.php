<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ComissaoController extends Controller
{
    //

    public function index(){

        return view('app.comissao');
    }

    public function calcular(Request $request){
        $porcetagem = $request->porcetagem;
        $user = Session('id_user');
        $mes_atual = date('m');


        $balanco = DB::table('movimentacoes')
        ->join('produtos', 'produtos.id', '=', 'movimentacoes.produto_id')
        ->where('tipo', '=', 'saida')
        ->where('user_id', '=', $user )
        ->where('movimentacoes.loja_id', '=', Session('loja_id') )
        ->whereMonth('movimentacoes.created_at', '=',$mes_atual)
        ->get();


         $quant_total_saidas= 0;
         $quant_total_vendas= 0;
         $comissao= 0;


        foreach($balanco as $b){
            $quant_total_saidas += $b->quantidade;
            $quant_total_vendas += $b->quantidade * $b->preco_venda;

        }
        $comissao = ($porcetagem*$quant_total_vendas) /100;
        $total_vendas_user=$quant_total_vendas;


        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

        $mes =  strftime('%B ', strtotime('today'));



        return view('app.comissao',compact('comissao','total_vendas_user','porcetagem','mes'));

    }
}

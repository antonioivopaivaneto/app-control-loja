
@extends('app.layouts.base')

@section('conteudo')



<div class="container-fluid">

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="page-title">Suporte</h2>


        </div>
    </div>
    <div class="row">

        <h3>Precisa de ajudar? </h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Duvidas Comuns</h5>
                    <div class="help-topics">
                        <ul class="list-unstyled">
                            <li><a href="#">Como Fazer uma venda?</a></li>
                            <li><a href="#">Como Inserir no Estoque?</a></li>
                            <li><a href="#">Como Calcular Comissão?</a></li>
                            <li><a href="#">Como Cadastrar um novo Produto?</a></li>
                            <li><a href="#">O que fazer aoinserir uma movimentacao errada?</a></li>
                            <li><a href="#">Como posso melhorar o sistema?</a></li>
                            <li><a href="#">Quando acionar o suporte?</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div class="row">


    <a target="_blank" href="https://wa.me/5511980985640?text=Pode me ajudar? sou da {{Session('loja')}}" class="btn btn-success waves-effect waves-light">Chamar o suporte</a>


    </div>




</div>

</div><!-- Page Content -->




            </div><!-- Page Content -->





@endsection

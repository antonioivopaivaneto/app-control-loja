
@extends('app.layouts.base')

@section('conteudo')



<div class="container-fluid">

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="page-title">Calcular Comissao</h2>


        </div>
    </div>
    <div class="row">

        <form action="{{route('calcular')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="porcetagem">Porcentagem</label>
                <input id="porcetagem" name="porcetagem" type="number" class="form-control" placeholder="exemplo: 5%" required>
            </div>

            <button type="submit" class="btn btn-info">Calcular</button>

        </form>
    </div>



    @if(isset($comissao))
        <div class="row mt-3">
            <div class="card">
                <div class="card-header">
                    Comissão do {{Session('name_user')}}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Mês: {{$mes}}</li>
                    <li class="list-group-item">Total de venda deste mês : R$ {{number_format($total_vendas_user,2)}}</li>
                    <li class="list-group-item">Porcentagem de comissão : {{$porcetagem}}%</li>
                    <li class="list-group-item">Sua comissão é : R$ {{number_format($comissao,2)}}</li>
                </ul>
            </div>
        </div>

    @endif






</div>

</div><!-- Page Content -->




            </div><!-- Page Content -->





@endsection

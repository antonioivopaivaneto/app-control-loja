
@extends('app.layouts.base')

@section('conteudo')

<div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">Criar ou ver movimentações</h2>

                        </div>
                    </div>



                    <div class="row">
                              <div class="col-8">
                                <div class="card">
                                    <div class="card-header">Nova movimentacao</div>
                                <div class="card-body">

                                    <h2>Selecione o produto</h2>
                                    <form action="{{route('movimentacao.store')}}" method="post">
                                        @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-control">Tipo de movimentacao</label>
                                                <select  name="tipo" class="form-control">
                                                    <option value="0">Selecione o Tipo</option>
                                                    <option value="entrada">Entrada</option>
                                                    <option value="saida">Saida</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-control">Motivo</label>
                                                <select name="motivo"  class="form-control">
                                                    <option value="0">Selecione o Motivo</option>
                                                    <option value="Reposição">Reposição</option>
                                                    <option value="Reposição">Venda</option>
                                                    <option value="Reposição">troca</option>
                                                    <option value="Devolução">Devolução</option>
                                                    <option value="Transferencia de loja">Transferencia de loja</option>
                                                    <option value="outro">outro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="nome">Produto</label>
                                        <select  name="produto" class="form-control" required>
                                            <option value="0">Selecione o Produto</option>
                                            @foreach ($produtos as $produto )
                                            <option value="{{$produto->id}}">{{$produto->nome}}</option>

                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="nome">Quantidade</label>
                                               <input name="quantidade" type="text" class="form-control">
                                            </div>
                                        </div>


                                    </div>




                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Adicionar</button>
                                </div>

            </form>






                            </div>
                        </div>
                    </div>
                </div>
                            <br>





                    <div class="row">
                        <div class="card">
                            <div class="card-header">Todas movimentações</div>
                            <div class="card-body">


                        <div class="table-responsive">
                            <table id="mytable" class="table border border rounded text-center">
                            <thead >
                            <tr>
                                <th>id</th>
                                <th>Tipo</th>
                                <th>Motivo</th>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Data e hora</th>
                                <th>Editar ou Remover</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($movimentacoes as $m )
                                <tr  >
                                        <td>{{$m->id}}</td>
                                        <td><span {{$m->tipo =='entrada'? $cor='text-success' : $cor = "text-danger"}} class="{{$cor}}">{{$m->tipo}}</span></td>
                                        <td>{{$m->motivo}}</td>
                                        <td>{{$m->produto->nome}}</td>
                                        <td><span {{$m->tipo =='entrada'? $traco='+' : $traco = "-"}} class="{{$cor}}">{{$traco}}{{$m->quantidade}}</span></td>
                                        <td>{{ date('d/m H:m',strtotime( $m->created_at))}}</td>

                                        <td>
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modalEdit{{$m->id}}">
                                                <span class="material-icons text-white">
                                                edit
                                                </span>
                                            </button>

                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modalRemove{{$m->id}}">
                                                <span class="material-icons text-white">
                                                        delete
                                                </span>
                                            </button>

                                        </td>

                                </tr>
                                @endforeach
                            </tbody>

                        </div>
                    </div>
                </div>

                </div>
                </div>

            </div><!-- Page Content -->


<script>
    $(document).ready(function() {





      $("#mytable").Grid({
        language: {
  'search': {
    'placeholder': '🔍 Pesquisar..'
  },
  'pagination': {
    'previous': '⬅️',
    'next': '➡️',
    'showing': '😃 Mostrando',
    'results': () => 'Campos'
  }
},
        search:true,
        pagination:{
          limit:5,
        }
      });

      $('.gridjs-search').prepend('<span>pesquisar</span>');


    })


  </script>

            @endsection






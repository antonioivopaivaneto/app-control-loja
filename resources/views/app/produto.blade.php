
@extends('app.layouts.base')

@section('conteudo')

<div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">Produtos</h2>

                        </div>
                    </div>



                    <div class="row">
                              <div class="col-6">
                              <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter">
                                Cadastrar novo Produto
                            </button>
                              </div>
                            </div>
                            <br>



                    <div class="row">
                        <div class="table-responsive">
                            <table id="mytable" class="table border border rounded text-center">
                            <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Preco compra</th>
                                <th>preco venda</th>
                                <th>categoria</th>
                                <th>Editar ou Remover</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produtos as $p)

                                    <tr>
                                        <td>{{$p->id}}</td>
                                        <td>{{$p->nome}}</td>
                                        <td>{{$p->estoque}}</td>
                                        <td>{{$p->preco_custo}}</td>
                                        <td>{{$p->preco_venda}}</td>
                                        <td>{{$p->categorias->nome}}</td>

                                        <td>
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modalRemove{{$p->id}}">
                                                <span class="material-icons text-white">
                                                        delete
                                                </span>
                                            </button>

                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modalEdit{{$p->id}}">
                                                <span class="material-icons text-white">
                                                edit
                                                </span>
                                            </button>
                                        </td>

                                    </tr>
                                    @include('app.produto.remove')
                                    @include('app.produto.form-edit')

                                @endforeach
                            </tbody>

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

            @include('app.produto.form')









@extends('app.layouts.base')

@section('conteudo')

<div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">Movimentação</h2>

                        </div>
                    </div>



                    <div class="row">
                              <div class="col-6">
                              <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bd-example-modal-xl">
                                Cadastrar nova Movimentação
                            </button>
                              </div>
                            </div>
                            <br>



                    <div class="row">
                        <div class="table-responsive">
                            <table id="mytable" class="table border border rounded text-center">
                            <thead >
                            <tr>
                                <th>Codigo</th>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Preco compra</th>
                                <th>preco venda</th>
                                <th>cor</th>
                                <th>categoria</th>
                                <th>Editar</th>
                                <th>Remover</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                </tr>
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

            @component('app.movimentacao.form',compact('produtos'))

            @endcomponent





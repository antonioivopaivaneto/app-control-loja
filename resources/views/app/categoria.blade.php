
@extends('app.layouts.base')

@section('conteudo')



<div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">Categoria</h2>

                        </div>
                    </div>





                    <div class="row">
                              <div class="col-6">
                              <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modalCreate">
                                Cadastrar nova Categoria
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
                                <th>Categoria</th>
                                <th>Quantidade minima</th>
                                <th>alterar ou remover</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorias as $c )


                                <tr>
                                    <td>{{$c->id}}</td>
                                    <td>{{$c->nome}}</td>
                                    <td>{{$c->quantidade_minima}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modalRemove{{$c->id}}">
                                            <span class="material-icons text-white">
                                                    delete
                                            </span>
                                        </button>

                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modalEdit{{$c->id}}">
                                            <span class="material-icons text-white">
                                            edit
                                            </span>
                                        </button>
                                    </td>


                                    @include('app.categoria.form-remove')
                                    @include('app.categoria.form-edit')

                                </tr>


                                @endforeach
                            </tbody>
                            @include('app.categoria.form')

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








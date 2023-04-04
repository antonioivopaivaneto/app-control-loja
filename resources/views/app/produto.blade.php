
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
                              <button id="addNewProduto" class="btn btn-primary">Cadastrar novo</button>

                              </div>
                            </div>
                            <br>



                            <div class="row" id="addProduto">
                              <div class="col-8">
                              <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Cadastro de novo produto</h5>
                                    <form method="post" action="core/produto/Produto_Controller.php" >
                                    <div class="form-group">
                                          <label for="nome">Nome</label>
                                          <input type="text" name="nome" placeholder="Nome do Produto" class="form-control" required >
                                      </div>
                                      <div class="form-group">
                                          <label for="nome">Quantidade</label>
                                          <input type="number" name="quantidade" placeholder="Quantidade" class="form-control" required >
                                      </div>
                                      <div class="form-group">
                                          <label for="nome">Preço de Custo</label>
                                          <input type="text" name="preco_custo" placeholder="Preco de Compra" class="form-control "  id="compra" data-symbol="R$ " data-thousands="." data-decimal=","  />
                                      </div>
                                      <div class="form-group">
                                          <label for="nome">Preço de Venda</label>
                                          <input type="text" name="preco_venda" required placeholder="Preco de Venda" class="form-control"  id="venda" data-symbol="R$ " data-thousands="." data-decimal=","  />
                                      </div>
                                      <div class="form-group">
                                          <label for="nome">Cor</label>
                                          <input type="text" name="cor" placeholder="Cor do Produto" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="nome">Categoria</label>
                                          <select name="categoria_id" class="form-control" required>
                                              <option value="0">Selecione</option>
                                              
                                          </select>
                                      </div>
                                        <button type="submit" id="addnew" class="btn btn-primary waves-effect waves-light">Cadastrar</button>
                                        <button type="button" id="closeAddProduto" class="btn btn-primary waves-effect waves-light">Fechar</button>
                                    </form>
                                </div>
                            </div>
                              </div>
                            </div>


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
      $('#addProduto').hide();


      
      $('#addnew').on('click', function(){
            toastr.success('Are you the 6 fingered man?')
       });

      $('#closeAddProduto').click(function(){
        $('#addProduto').hide(500);
      })
      $('#addNewProduto').click(function(){
        $('#addProduto').show(500);
      })

      
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




    


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Novo Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('produto.store')}}" >
                    @csrf
                    <div class="form-group">
                          <label for="nome">Nome</label>
                          <input type="text" name="nome" placeholder="Nome do Produto" class="form-control" required >
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
                        <label for="nome">Quantidade</label>
                        <input type="number" name="quantidade" required placeholder="quantidade" class="form-control"  id="quantidade"  />
                    </div>


                      <div class="form-group">
                          <label for="nome">Categoria</label>
                          <select name="categoria_id" class="form-control" required>
                              <option value="0">Selecione</option>
                              @foreach ($categorias as $c )
                              <option value="{{$c->id}}">{{$c->nome}}</option>

                              @endforeach

                          </select>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-text-secondary waves-effect waves-light" data-dismiss="modal">Sair</button>
                        <button type="submit" class="btn btn-text-primary waves-effect waves-light">Cadastrar</button>
                    </div>

                    </form>
            </div>

        </div>
    </div>
</div>

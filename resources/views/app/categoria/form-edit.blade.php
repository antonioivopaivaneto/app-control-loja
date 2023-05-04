<div class="modal fade" id="modalEdit{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Editar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('categoria.update',$c->id)}}" >
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                          <label for="nome">Nome</label>
                          <input type="text" name="nome" value="{{$c->nome}}" placeholder="Nome do Produto" class="form-control" required >
                      </div>
                      <div class="form-group">
                          <label for="nome">Quantidade Minima de produtos</label>
                          <input type="number"  value="{{$c->quantidade_minima}}" name="quantidade_minima" placeholder="Quantidade" class="form-control" required >
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-text-secondary waves-effect waves-light" data-dismiss="modal">Sair</button>
                        <button type="submit" class="btn btn-text-primary waves-effect waves-light">Alterar</button>
                    </div>

                    </form>
            </div>

        </div>
    </div>
</div>

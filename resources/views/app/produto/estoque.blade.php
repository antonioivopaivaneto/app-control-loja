<div class="modal fade" id="estoque{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Estoque</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('estoque.store')}}" >
                    @csrf
                    <div class="form-group">
                          <label for="nome">Quantidade</label>
                          <input type="number" name="quantidade" placeholder="Quantidade em estoque" class="form-control" required >
                          <input type="hidden" name="produto_id" value="{{$p->id}}"  class="form-control"  >
                      </div>


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

<div class="modal fade" id="modalRemove{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Excluir Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('produto.destroy',$p->id)}}" >
                    @csrf
                    @method('DELETE')

                   <h2>Deseja remover esse Produto?</h2>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-text-secondary waves-effect waves-light" data-dismiss="modal">Sair</button>
                        <button type="submit" class="btn btn-text-primary waves-effect waves-light">Remover</button>
                    </div>

                    </form>
            </div>

        </div>
    </div>
</div>

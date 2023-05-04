<div class="modal fade bd-example-modal-xl"  data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Nova Movimentação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
            <div class="modal-body">

                <h2>Movimentacao</h2>
                <form action="" method="">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-control">Tipo de movimentacao</label>
                            <select id="tipo" name="tipo" class="form-control">
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
                            <select id="motivo" name="tipo" class="form-control">
                                <option value="0">Selecione o Motivo</option>
                                <option value="Reposição">Reposição</option>
                                <option value="Devolução">Devolução</option>
                                <option value="Transferencia de loja">Transferencia de loja</option>
                                <option value="outro">outro</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="nome">Produto</label>
                    <select id="produto" name="produto" class="form-control" required>
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
                           <input id="quantidade" type="text" class="form-control">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-6">
                        <button id="addItem" type="button" class="btn btn-info" >Adicionar</button>
                    </div>
                </div>

                <div class="row">
                    <div class="table-responsive">
                        <table id="tableProd" class="table overflow">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Produto</th>
                                    <th>quantidade</th>
                                    <th>remover</th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-text-secondary waves-effect waves-light" data-dismiss="modal">Sair</button>
                <button type="button" class="btn btn-text-primary waves-effect waves-light">Cadastrar</button>
            </div>
        </form>
        </div>
    </div>
</div>




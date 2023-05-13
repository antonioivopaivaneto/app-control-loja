
@extends('app.layouts.base')

@section('conteudo')



<div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">Dashboard</h2>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                                <div class="row">

                                    @foreach ($categorias as $c)



                                <div class="col-lg-3 col-md-3">
                                    <div class="card info-card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$c->nome}}</h5>
                                            <div class="info-card-text">
                                                <h3>{{$c->produtos->where('loja_id','=',Session('loja_id'))->sum('estoque')}}</h3>
                                                <span class="info-card-helper">em estoque</span>
                                            </div>
                                            <div class="info-card-icon">
                                                <i class="material-icons">inventory</i>
                                            </div>
                                        </div>

                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: {{round($c->produtos_count *  $c->quantidade_minima)}}%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Movimentações</h5>
                                    <div class="card-info"><a href="#" class="btn btn-xs btn-text-dark">Ver Todas</a></div>
                                    <ul class="report-list list-unstyled">

                                        @foreach ($movimentacoes->where('loja_id','=',Session('loja_id')) as $m )


                                        <li class="report-item report-info ">
                                            <div class="report-icon"><i class="material-icons {{$m->tipo == 'entrada'? 'text-success' : 'text-danger'}}">{{$m->tipo == 'entrada'? 'arrow_forward' : 'arrow_back'}}</i></div>
                                            <div class="report-text {{$m->tipo == 'entrada'? 'text-success' : 'text-danger'}}">{{$m->tipo}}
                                                <span>{{$m->produto->nome}} - Quantidade : {{$m->quantidade}}</span>
                                                <span>Usuario: {{$m->usuario->name}}</span>
                                                <span>Valor:R$ {{number_format($m->produto->preco_venda*$m->quantidade,2)}}
                                                </span>
                                            </div>
                                            <div class="report-helper">{{$m->created_at->diffForHumans()}}</div>

                                        </li>
                                        <hr>

                                        @endforeach

                                    </ul>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                          <li class="page-item">
                                            <a class="page-link" href="{{$movimentacoes->previousPageUrl()}}" aria-label="Previous">
                                              <span aria-hidden="true">&laquo;</span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                          </li>

                                          @for ($i = 1;$i <= $movimentacoes->lastpage()  ;$i ++)
                                          <li class="page-item {{$movimentacoes->currentPage() == $i ? 'active':''}}"><a class="page-link" href="{{$movimentacoes->url($i)}}">{{$i}}</a></li>

                                          @endfor

                                          <li class="page-item">
                                            <a class="page-link" href="{{$movimentacoes->nextPageUrl()}}" aria-label="Next">
                                              <span aria-hidden="true">&raquo;</span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                          </li>
                                        </ul>
                                      </nav>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div><!-- Page Content -->





@endsection

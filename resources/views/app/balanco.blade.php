
@extends('app.layouts.base')

@section('conteudo')



<div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">Dashboard</h2>
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="ml-3">{{$mes}}</h2>
                        <div class="col-lg-12 col-md-12">
                                <div class="row">

                                <div class="col-lg-6 col-md-6">
                                    <div class="card info-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Total de Produtos Vendidos</h5>
                                            <div class="info-card-text">
                                                <h3 class="text-success">R$ {{number_format($quant_total_vendas,2)}}</h3>
                                                <span class="info-card-helper">Valor Total de vendas</span>
                                            </div>
                                            <div class="info-card-icon">
                                                <i class="material-icons">inventory</i>
                                            </div>
                                        </div>
                                </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="card info-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Valor Total de Vendas</h5>
                                            <div class="info-card-text">
                                                <h3 class="text-success">{{$quant_total_saidas}}</h3>
                                                <span class="info-card-helper">Quantidade total de vendas </span>
                                            </div>
                                            <div class="info-card-icon">
                                                <i class="material-icons">inventory</i>
                                            </div>
                                        </div>
                                </div>
                                </div>



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

                                        @foreach ($movimentacoes as $m )


                                        <li class="report-item report-info ">
                                            <div class="report-icon"><i class="material-icons {{$m->tipo == 'entrada'? 'text-success' : 'text-danger'}}">{{$m->tipo == 'entrada'? 'arrow_forward' : 'arrow_back'}}</i></div>
                                            <div class="report-text {{$m->tipo == 'entrada'? 'text-success' : 'text-danger'}}">{{$m->tipo}}
                                                <span>{{$m->produto->nome}} - Quantidade : {{$m->quantidade}}</span>
                                            </div>
                                            <div class="report-helper">{{$m->created_at->format("d/m/Y H:i")}}</div>

                                        </li>
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

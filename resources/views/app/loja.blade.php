

@extends('app.layouts.base-simple')



@section('conteudo')

<body class="login-page sign-in">
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="alpha-app">
        <div class="container">
            <div class="login-container">
                @php
                if(date('d')=='04'){
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Sua parcela vence Amanha, dia 05!</strong>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>';
                }

                @endphp

                <div class="row justify-content-center row align-items-center">


                @foreach ($user_loja as $loja)

                    <div class="col-lg-3 col-md-6">
                    <div class="card">
                            <div class="card-body">
                                <h3 class="card-title font-weight-bolder">{{ $loja->nome}}</h3>
                                <form action="{{route('home') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="loja" value="{{$loja->id}}">

                                    @if ($loja->status==='0')
                                    <button type="button" class="btn btn-secondary waves-effect waves-light" data-container="body" data-toggle="popover" data-placement="top" data-content="Acesso não autorizado por falta de pagamento, favor entrar em contato" data-original-title="" title="">Acessar</button>

                                    @else
                                    <button type="submit" class="btn btn-secondary waves-effect waves-light " >Acessar</button>

                                    @endif
                            </form>
                            </div>
                        </div>
                    </div>

                @endforeach



                </div>
            </div>
            <div class="row fixed-bottom p-3 m-3 ">
                <a href="{{route('sair')}}" class="waves-effect waves-grey text-white">
                    <i class="material-icons">logout</i>Sair
                </a>

            </div>

        </div>
    </div>

@endsection

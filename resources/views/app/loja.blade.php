

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
                <div class="row justify-content-center row align-items-center">

                @foreach ($user_loja as $loja)

                    <div class="col-lg-4 col-md-6">
                    <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">{{ $loja->nome}}</h3>
                                <form action="{{route('home') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="loja" value="{{$loja->id}}">
                                <button type="submit" class="btn btn-secondary waves-effect waves-light">Acessar</button>
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

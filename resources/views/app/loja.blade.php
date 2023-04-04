

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
                    <div class="col-lg-4 col-md-6">
                    <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Loja SP</h3>
                                <a href={{route('home') }} class="btn btn-secondary waves-effect waves-light">Acessar</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                    <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Loja RJ</h3>
                                <a href={{route('home') }} class="btn btn-secondary waves-effect waves-light">Acessar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('app.layouts.base')

@section('conteudo')



<div class="container-fluid">

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="page-title">Pagamento</h2>


        </div>
    </div>
    <div class="row">

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Acesse o link para pagamento</h5>
                    <div class="help-topics">
                        <img src="{{asset('assets/images/mercado.png')}}" width="200px" class="img-fluid" alt="">
                        <p>Link de Pagamento: <a href="https://mpago.la/17jjqFS">https://mpago.la/17jjqFS</a></p>

                        <a target="_blank" href="https://mpago.la/17jjqFS" class="btn btn-success waves-effect waves-light">Pagar agora</a>


                    </div>
                </div>
            </div>
        </div>



    </div>





</div>

</div><!-- Page Content -->




            </div><!-- Page Content -->





@endsection

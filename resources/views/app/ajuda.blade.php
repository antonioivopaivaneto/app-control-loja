
@extends('app.layouts.base')

@section('conteudo')



<div class="container-fluid">

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="page-title">Suporte</h2>


        </div>
    </div>
    <div class="row">

        <h3>Precisa de ajudar? </h3>
    </div>
    <div class="row">

      <h4> basta nos chamar no whatsapp e responderemos o mais breve possivel</h4>
    </div>
    <div class="row">


    <a target="_blank" href="https://wa.me/5511980985640?text=Pode me ajudar? sou da {{Session('loja')}}" class="btn btn-success waves-effect waves-light">Chamar o suporte</a>


    </div>




</div>

</div><!-- Page Content -->




            </div><!-- Page Content -->





@endsection

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
      
<style>
    body
{

    background: url(../img/fondo1.jpeg);
    background-size: cover;
    background-attachment: fixed;   

}
.container--form{
    text-align: center; 
    padding: 20px;
    background:rgba(0,0,0,.9);
    color:#fff;;
}
.card-header{
    font-family: perpetua;
    font-size: 30px;
    padding-bottom: 20px;
}
</style>


<div class="container--form">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro Completado') }}</div>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                     
                    
                    {{ __('Te registraste con exito !!') }}

                </div>

            </div>
        </div>
    </div>
    <img src="../img/registro.png">

</div>
@endsection

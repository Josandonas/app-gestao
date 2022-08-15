@extends('site.layouts.basico')

@section('titulo',$titulo)

@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Login</h1>
    </div>

    <div class="informacao-pagina">
        <form action={{ route('site.login') }} method="post">
            @csrf
            
        </form>
    </div>
</div>
@include('site.layouts._partials.rodape')
@endsection

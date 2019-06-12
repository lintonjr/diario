@extends('Frontend.Layouts.app')
@section('title', $client->name)
@section('logo', $client->name)
@section('content')
<main role="main" class="container">
    <!--
    <div class="jumbotron p-2 p-md-2 text-white rounded bg-img">
        <div class="col-md-6 px-0">
            <h1 class="display-5 font-italic text-center text-white">Diário Oficial do Estado do Amazonas</h1>
            <p class="my-0"></p>
        </div>
    </div>-->
    <div class="row">
        <div class="col-md-8">
            <h5 class="pb-3 mb-2 border-bottom">
                <div class="card card-body">
                    <h4 class="card-title">Pesquisar Publicação</h4>
                    <p class="card-text">Digite o código de certificação que aparece abaixo da matéria publicada para verificar sua autenticidade.</p>
                    <form class="form-inline" method="GET" action="{{ route('searchidResult', $client->alias) }}" target="_blank">
                        {!! csrf_field() !!}
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="publish_number" value="{{ isset($dataForm['publish_number']) ? $dataForm['publish_number'] : '' }}" placeholder="Identificador">
                        </div>
                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                    </form> <!-- form form-inline -->
                </div>
            </h5>
        </div><!-- /.blog-main -->
        <aside class="col-md-4 blog-sidebar">
            <div class="">
                <h4 class="">Diário Atual</h4>
                <figure class="bgs" id="ultima-edicao">
                    <a href="{{isset($daily->file_path) ? Storage::url($daily->file_path) : ''}}" target="_blank">
                        <img width="210" height="235" title="Última Edição do Diário" alt="Última Edição do Diário" src="{{asset('img/diario-img.JPG')}}">
                    </a>
                </figure>
            </div>
        </aside>
        <div class="col-md-4">
            <div class="card card-body">
                <h4 class="card-title">Arquivo de Publicações</h4>
                <p class="card-text"><BR />Pesquisa avançada de matérias publicadas.<BR /><BR /></p>
                <a href="{{route('busca', $client->alias)}}" class="btn btn-primary">Pesquisar</a>
            </div>
        </div><!-- /.blog-main -->
        <div class="col-md-4 pb-3 mb-2">
            <div class="card card-body">
                <h4 class="card-title">Arquivo de Diários</h4>
                <p class="card-text"><BR />Pesquisa de diários publicados.<BR /><BR /></p>
                <a href="{{route('diarios', $client->alias)}}" class="btn btn-primary">Pesquisar</a>
            </div>
        </div><!-- /.blog-main -->
        <aside class="col-md-4 blog-sidebar">
            <div class="bg-light rounded">
                <h4 class="font-italic">Sobre o Diário</h4>
                <p class="mb-0">O Diário Oficial, tem como objetivo a publicação e produção gráfica de matérias de interesse geral.</p>
            </div>
        </aside><!-- /.blog-sidebar -->    
    </div><!-- /.row -->
</main>
@endsection

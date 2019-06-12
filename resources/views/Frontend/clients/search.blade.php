@extends('Frontend.Layouts.app')
@section('title', $client->name)
@section('logo', $client->name)
@section('link', route('client.page', $client->alias))
@section('content')
<main role="main" class="container">
    <!--
    <div class="jumbotron p-2 p-md-2 text-white rounded bg-img">
        <div class="col-md-6 px-0">
            <h1 class="display-5 font-italic text-center text-white">Diário Oficial do Estado do Amazonas</h1>
            <p class="my-0"></p>
        </div>
    </div>
    -->
    <div class="row">
        <div class="col-md-12">
            <h5 class="pb-3 mb-2 border-bottom">
                <div class="card card-body">
                    <h4 class="card-title">Pesquisar Publicação</h4>
                    {{-- <p class="card-text">Digite o código de certificação que aparece abaixo da matéria publicada para verificar sua autenticidade.</p> --}}
                    <form class="form" method="POST" action="{{ route('busca.resultado', $client->alias) }}">
                        {!! csrf_field() !!}
                        <div class="form-row">
                            <div class="col-12">
                                <fieldset class="form-group">
                                    <label for="last_name">Título</label>
                                    <input type="text" class="form-control" name="title" value="{{ isset($dataForm['title']) ? $dataForm['title'] : '' }}">
                                </fieldset>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <fieldset class="form-group">
                                    <label for="last_name">Entidade</label>
                                    <input type="text" class="form-control" name="entity" value="{{ isset($dataForm['entity']) ? $dataForm['entity'] : '' }}">
                                </fieldset>
                            </div>
                            <div class="col-6">
                                <fieldset class="form-group">
                                    <label for="last_name">Órgão/Nome Empresarial</label>
                                    <input type="text" class="form-control" name="agency" value="{{ isset($dataForm['agency']) ? $dataForm['agency'] : '' }}">
                                </fieldset>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <fieldset class="form-group">
                                    <label for="last_name">Data Inicial</label>
                                    <input type="date" class="form-control" name="date_ini" value="{{ isset($dataForm['date_ini']) ? $dataForm['date_ini'] : '' }}">
                                </fieldset>
                            </div>
                            <div class="col-6">
                                <fieldset class="form-group">
                                    <label for="last_name">Data Final</label>
                                    <input type="date" class="form-control" name="date_end" value="{{ isset($dataForm['date_end']) ? $dataForm['date_end'] : '' }}">
                                </fieldset>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                    </form>
                </div>
            </h5>
            @if(isset($dataForm['entity']) && $dataForm['entity'] != null || isset($dataForm['title']) && $dataForm['title'] != null || isset($dataForm['agency']) && $dataForm['agency'] != null || isset($dataForm['date_ini']) && $dataForm['date_ini'] != null)
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Entidade</th>
                                <th>Título</th>
                                <th>Órgão</th>
                                <th>Ano</th>
                                <th>Ato</th>
                                <th>Identificador</th>
                                <th>Data de Circulação</th>
                                <th>Ver</th>
                            </tr>
                        </thead>
                        @foreach($themes as $theme)
                            <tbody>
                                <tr>
                                    <td>{{$theme->section->entities->first()->name}}</td>
                                    <td>{{$theme->title}}</td>
                                    <td>{{$theme->agency->name}}</td>
                                    <td>{{$theme->year}}</td>
                                    <td>{{$theme->act}}</td>
                                    <td>{{$theme->publish_number}}</td>
                                    <td>{{Helper::formatDate($theme->daily->date_released)}}</td>
                                    <td><a href="{{ route('item', $theme->id) }}" target="_blank"><li class="bqX" data-tooltip="Visualizar"><i class="mdi mdi-eye"></i></li></a></td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                    @if (isset($dataForm))
                        {!! $themes->appends($dataForm)->links() !!}
                    @else
                        {!! $themes->links() !!}
                    @endif
                </div> <!-- box-body -->
            @endif
        </div><!-- /.blog-main -->
    </div><!-- /.row -->
</main>
@endsection

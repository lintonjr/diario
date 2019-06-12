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
                    <h4 class="card-title">Pesquisar Diários</h4>
                    {{-- <p class="card-text">Digite o código de certificação que aparece abaixo da matéria publicada para verificar sua autenticidade.</p> --}}
                    <form class="form" method="POST" action="{{ route('diario.resultado', $client->alias) }}">
                        {!! csrf_field() !!}
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
            @if(isset($dataForm['date_ini']) && $dataForm['date_ini'] != null)
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Ano</th>
                                <th>Nº</th>
                                <th>Data de Circulação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        @foreach($dailies as $daily)
                            <tbody>
                                <tr>
                                    <td>{{$daily->description}}</td>
                                    <td>{{$daily->year}}</td>
                                    <td>{{$daily->number}}</td>
                                    <td>{{\Helper::formatDate($daily->date_released)}}</td>
                                    <td><a href='{{Storage::url($daily->file_path)}}' title='Baixar' download target='_blank'><li class='bqX' data-tooltip='Baixar'><i class='mdi mdi-download'></i></li></a></td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                    @if (isset($dataForm))
                        {!! $dailies->appends($dataForm)->links() !!}
                    @else
                        {!! $dailies->links() !!}
                    @endif
                </div> <!-- box-body -->
            @endif
        </div><!-- /.blog-main -->
    </div><!-- /.row -->
</main>
@endsection

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Diretório Digital</title>

         <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,700|Roboto:100,200,400,900" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="{{ asset('modern/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body style="position: relative; overflow: hidden;">
        <section class="hero">
            <div class="container">
                <div class="box">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-md-12" align="center">
                            <form class="form" method="POST" action="{{ route('search.result') }}">
                                {!! csrf_field() !!}
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="entity" value="{{ isset($dataForm['entity']) ? $dataForm['entity'] : '' }}" placeholder="Entidade">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="title" value="{{ isset($dataForm['title']) ? $dataForm['title'] : '' }}" placeholder="Título">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="agency" value="{{ isset($dataForm['agency']) ? $dataForm['agency'] : '' }}" placeholder="Órgão/Nome Empresarial">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="date_ini" value="{{ isset($dataForm['date_ini']) ? $dataForm['date_ini'] : '' }}" placeholder="selecione a data Inicial">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="date_end" value="{{ isset($dataForm['date_end']) ? $dataForm['date_end'] : '' }}" placeholder="selecione a data Final">
                                </div>
                                <button type="submit" class="btn btn-primary">Pesquisar</button>
                            </form> <!-- form form-inline -->
                        </div>
                        </div>
                    </div> <!-- box-header -->
                    @if(isset($dataForm['entity']) && $dataForm['entity'] != null || isset($dataForm['title']) && $dataForm['title'] != null || isset($dataForm['agency']) && $dataForm['agency'] != null || isset($dataForm['date_ini']) && $dataForm['date_ini'] != null)
                        <div class="box-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Título</th>
                                    <th>Ano</th>
                                    <th>Ato</th>
                                    <th>Número de Publicação</th>
                                    <th>Ações</th>
                                    </tr>
                                </thead>
                                @foreach($themes as $theme)
                                <tbody>
                                    <tr>
                                        <td>{{$theme->id}}</td>
                                        <td>{{$theme->title}}</td>
                                        <td>{{$theme->year}}</td>
                                        <td>{{$theme->act}}</td>
                                        <td>{{$theme->publish_number}}</td>
                                        <td><a href="{{ route('item', $theme->id) }}" target="_blank">NOME</i></a></td>
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
                </div> <!-- box -->
            </div>
        </section>
    </body>
</html>

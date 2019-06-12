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
                            <form class="form" method="POST" action="{{ route('searchid') }}">
                                {!! csrf_field() !!}
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="publish_number" placeholder="Identificação">
                                </div>
                                <button type="submit" class="btn btn-primary">Pesquisar</button>
                            </form> <!-- form form-inline -->
                        </div>
                        </div>
                    </div> <!-- box-header -->
                    @if(isset($dataForm['publish_number']) && $dataForm['publish_number'] != null)
                        <div class="box-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
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
                                        <td>{{$theme->title}}</td>
                                        <td>{{$theme->year}}</td>
                                        <td>{{$theme->act}}</td>
                                        <td>{{$theme->publish_number}}</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div> <!-- box-body -->
                    @endif
                </div> <!-- box -->
            </div>
        </section>
    </body>
</html>

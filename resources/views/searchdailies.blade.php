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
                            <form class="form" method="POST" action="{{ route('searchdailies') }}">
                                {!! csrf_field() !!}
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="date_ini" placeholder="selecione a data Inicial">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="date_end" placeholder="selecione a data Final">
                                </div>
                                <button type="submit" class="btn btn-primary">Pesquisar</button>
                            </form> <!-- form form-inline -->
                        </div>
                        </div>
                    </div> <!-- box-header -->
                    @if(isset($dataForm['date_ini']) && $dataForm['date_ini'] != null)
                        <div class="box-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                    <th>Título</th>
                                    <th>Ano</th>
                                    <th>Nº</th>
                                    <th>Data</th>
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

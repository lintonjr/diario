<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Materias</title>
    <style>
        body {
            font: normal normal 12px Arial,Helvetica,sans-serif;
            color: #7c7b7b;
        }
        #container {
            margin: 0 auto;
            /* height: 500px; */
            width: 850px;
            padding-bottom: 20px;
        }
        #content {
            margin-top: .8em;
            width: 843px;
            /* min-height: 600px; */
            border-width: 0 4px;
            border-color: #fff;
            border-style: solid;
            text-align: left;
        }
        h1 {
            font-size: 2em;
            margin: .67em 0;
        }
        .cabecalhoEstadoSeparador {
            font-size: 10pt;
            border: 1px solid #000;
            border-width: 2px 0;
            background: #f2f2f2;
            text-transform: uppercase;
        }
        .cabecalhoEstadoSeparador h1 {
            font-size: 9pt;
            color: #000;
            display: block;
            padding: 3px 0;
        }
        .cabecalhoEstadoSeparador, .cabecalhoEstadoSeparador h1 {
            text-align: center;
            font-family: "Times New Roman",Roman,serif!important;
        }
        .cabecalhoEstadoSeparador2 {
            width: 718px;
            margin: 0 auto;
            margin-top: 5px;
        }
        .materia2 {
            width: 718px;
        }

        .materia {
            font-family: "Times New Roman",Roman,serif!important;
            font-size: 10pt;
            color: #000;
            background-color: #fff;
            margin: 0 auto;
            padding: 0;
            line-height: 14px;
        }

        .materia h5 {
            font-family: "Times New Roman",Roman,serif!important;
            font-size: 10pt;
            padding-bottom: 22px;
            margin-top: 10px;
        }
        h5 {
            display: block;
            font-size: 0.83em;
            margin-block-start: 1.67em;
            margin-block-end: 1.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }
        hr {
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            height: 0;
        }
        hr {
            display: block;
            unicode-bidi: isolate;
            margin-block-start: 0.5em;
            margin-block-end: 0.5em;
            margin-inline-start: auto;
            margin-inline-end: auto;
            overflow: hidden;
            border-style: inset;
            border-width: 1px;
        }
        .rodape{
            text-align: left;
        }

        .cabecalhoEstadoSeparador1 {
            position: relative;
            left: 50%;
            width: 340px;
            margin-left: -170px;
            margin-top: 5px;
        }
        .materia1 {
            position: relative;
            left: 50%;
            width: 340px;
            padding-top: 22px;
            margin-left: -170px;
        }
        .cabecalhoEstadoSeparador3 {
            width: 1021px;
            margin-top: 5px;
        }
        .materia3 {
            width: 1021px;
        }
    </style>
</head>
<body>
    <h3 align="center">{{$daily->description}}</h3>
    @foreach ($themes as $theme)
    @if($theme->layout->width < 500 )
        <section id="container">
            <section id="content">
                <div class="container">
                    <article>
                        <div id="separador" class="cabecalhoEstadoSeparador cabecalhoEstadoSeparador1">
                            <h1>
                                ESTADO DO
                                {{$theme->agency->entity->state->name}}<br>
                                {{-- MUNICÍPIO DE {{$theme->agencies->entities->name}}<br> --}}
                            </h1>
                        </div>
                        <div id="materia" class="materia materia1">
                            <br>
                            {!!$theme->content!!}
                            <div align="right"><br><b>Publicado por:</b><br><br><b>Código Identificador:</b>{{$theme->publish_number}}</div>
                            <hr>
                            <div class="rodapé" align="left">
                                Matéria publicada no Diário Oficial dos Municípios do Estado do {{$theme->agency->entity->state->name}} no dia {{\Helper::formatDate($theme->daily->date_released)}}. Edição {{$theme->daily->number}} <br>
                                A verificação de autenticidade  da matéria pode ser feita informando o código identificador no site: <br>
                                http://www.imprensaoficial.am.gov.br
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </section>
    @elseif($theme->layout->width > 500 && $theme->layout->width < 1000)
        <section id="container">
            <section id="content">
                <div class="container">
                    <article>
                        <div id="separador" class="cabecalhoEstadoSeparador cabecalhoEstadoSeparador2">
                            <h1>
                                ESTADO DO
                                {{$theme->agency->entity->state->name}}<br>
                                {{-- MUNICÍPIO DE {{$theme->agency->entity->name}}<br> --}}
                            </h1>
                        </div>
                        <div id="materia" class="materia materia2">
                            <br>
                            {!!$theme->content!!}
                            <div align="right"><br><b>Publicado por:</b><br><br><b>Código Identificador:</b>{{$theme->publish_number}}</div>
                            <hr>
                            <div class="rodapé" align="left">
                                Matéria publicada no Diário Oficial dos Municípios do Estado do {{$theme->agency->entity->state->name}} no dia {{\Helper::formatDate($theme->daily->date_released)}}. Edição {{$theme->daily->number}} <br>
                                A verificação de autenticidade  da matéria pode ser feita informando o código identificador no site: <br>
                                http://www.imprensaoficial.am.gov.br
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </section>
        @else
        <section id="container">
            <section id="content">
                <div class="container">
                    <article>
                        <div id="separador" class="cabecalhoEstadoSeparador cabecalhoEstadoSeparador3">
                            <h1>
                                ESTADO DO
                                {{$theme->agency->entity->state->name}}<br>
                                {{-- MUNICÍPIO DE {{$theme->agency->entity->name}}<br> --}}
                            </h1>
                        </div>
                        <div id="materia" class="materia materia3">
                            <br>
                            {!!$theme->content!!}
                            <div align="right"><br><b>Publicado por:</b><br><br><b>Código Identificador:</b>{{$theme->publish_number}}</div>
                            <hr>
                            <div class="rodapé" align="left">
                                Matéria publicada no Diário Oficial dos Municípios do Estado do {{$theme->agency->entity->state->name}} no dia {{\Helper::formatDate($theme->daily->date_released)}}. Edição {{$theme->daily->number}} <br>
                                A verificação de autenticidade  da matéria pode ser feita informando o código identificador no site: <br>
                                http://www.imprensaoficial.am.gov.br
                            </div>
                        </div>
                    </article>

                </div>
            </section>
        </section>
    @endif
    @endforeach
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>

@extends('layouts.app')
@section('title', 'Diário Oficial')
@push('scripts')
@endpush
@section('content')
    <div class="content-wrapper bg-hexagons">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">{{$ctrl['name']}}</h3>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right" role="group">
                    @if($item->message_id != null)
                    <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1" data-toggle="modal" data-target="#default">
                        <i class="la la-close"></i> Motivo da Reprovação
                    </button>
                    @endif
                    <a accesskey="V" class="btn btn-primary btn-min-width mr-1 mb-1" role="button" href="{{ route($ctrl['route'].'.index') }}">
                        <i class="la la-arrow-left"></i> Voltar
                    </a>
                </div>
                <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel1">Motivo da Reprovação</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action=''>
                                <div class="md-form">
                                    <i class="mdi mdi-account prefix"></i>
                                    <input type="text" id="title" name="title" size="65" maxlength="255" class="form-control {{ isset($item->message->title) ? 'active' :null }}" disabled value="{{ isset($item->message->title) ? $item->message->title : '' }}">
                                    <label for="title" data-error="wrong" data-success="right">Título</label>
                                </div>
                                <div class="md-form">
                                    <i class="mdi mdi-account prefix"></i>
                                    <textarea name="message" id="message" cols="30" disabled rows="10">{{ isset($item->message->message) ? $item->message->message : '' }}</textarea>
                                    <label for="message" data-error="wrong" data-success="right">Mensagem</label>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Input Validation start -->
            <section class="input-validation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><div id="hora"></div> Cadastrar uma nova Publicação</h4>
                                <a class="heading-elements-toggle">
                                    <i class="la la-ellipsis-v font-medium-3"></i>
                                </a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li>
                                            <a data-action="collapse">
                                                <i class="ft-minus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-action="reload">
                                                <i class="ft-rotate-cw"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-action="expand">
                                                <i class="ft-maximize"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form id="form-theme" class="form-horizontal" method="POST" novalidate @if( isset($item->id)) action="{{ route($ctrl['route'].'.update', $item->id) }}">
                                        {{ method_field('put') }}
                                        @else
                                            action="{{ route($ctrl['route'].'.store') }}">
                                        @endif
                                            @csrf
                                        <div class="row">
                                            <input type="hidden" id="daily_id" name="daily_id" value="{{ $daily->id }}">
                                            <input type="hidden" id="user_created" name="user_created" value="{{ \Auth::user()->id }}">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Diário
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" id="name_daily" name="name_daily" value="{{ $daily->description }}" class="form-control {{ isset($daily->description) ? 'active' :null }}" size="65" maxlength="255" required autocomplete="off" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-12">
                                                <div class="form-group">
                                                    <h5>Data
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" id="date_released" name="date_released" value="{{ Helper::formatDate($daily->date_released) }}" class="form-control {{ isset($daily->date_released) ? 'active' :null }}" size="65" maxlength="255" required autocomplete="off" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-12">
                                                <div class="form-group">
                                                    <h5>Data de fechamento
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" id="closed_date" name="closed_date" value="{{ \Helper::formatDate(\Helper::proximoDiaUtil($dateDaily)).' 18:00' }}" class="form-control" size="65" maxlength="255" required autocomplete="off" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                @if(isset($item->id))
                                                    <div class="form-group">
                                                        <h5>Repetir Diário
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select id="multiRepeat" class="select2 form-control" name="repeat[]" multiple="multiple">
                                                                @foreach ($dailiesRepeat as $dailyRepeat)
                                                                    @php
                                                                        $opt = false;
                                                                    @endphp
                                                                    @foreach ($item->dailySync as $dailySync)
                                                                        @if($dailySync->id == $dailyRepeat->id)
                                                                            @php
                                                                                $opt = true;
                                                                            @endphp
                                                                            <option value="{{$dailyRepeat->id}}" selected>{{\Helper::formatDate($dailyRepeat->date_released)}}</option>
                                                                        @endif
                                                                    @endforeach
                                                                    @if($opt == false)
                                                                        <option value="{{$dailyRepeat->id}}">{{\Helper::formatDate($dailyRepeat->date_released)}}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="form-group">
                                                        <h5>Repetir Diário
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select id="multiRepeat" class="select2 form-control" name="repeat[]" multiple="multiple">
                                                                @foreach ($dailiesRepeat as $dailyRepeat)
                                                                    <option value="{{$dailyRepeat->id}}" {{ $item->dailyRepeat_id == $dailyRepeat->id ? 'selected': null }}>{{\Helper::formatDate($dailyRepeat->date_released)}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Órgão
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <select class="select2 form-control" name="agency_id" >
                                                            <option value="">-- Órgãos --</option>
                                                            @foreach ($agencies as $agency)
                                                                @if(isset($item->agency_id))
                                                                    <option value="{{$agency->id}}" data-name="{{$agency->name}}" {{ $item->agency_id == $agency->id ? 'selected': null }}>{{$agency->name}}</option>
                                                                @else
                                                                    <option value="{{$agency->id}}" data-name="{{$agency->name}}">{{$agency->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Caderno
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <select class="select2 form-control" id="sections" name="section_id" >
                                                            <option value="">-- Cadernos --</option>
                                                            @foreach ($sections as $section)
                                                                @if(isset($item->section_id))
                                                                    <option value="{{$section->id}}" data-name="{{$section->name}}" {{ $item->section_id == $section->id ? 'selected': null }}>{{$section->name}}</option>
                                                                @else
                                                                    <option value="{{$section->id}}" data-name="{{$section->name}}">{{$section->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                @if(isset($item->id))
                                                    <div class="form-group">
                                                        <h5>Tipo
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select class="form-control" id="types" name="type_id">
                                                                <option value="">-- Tipos --</option>
                                                                @foreach ($types as $type)
                                                                    @if(isset($item->type_id))
                                                                        <option value="{{$type->id}}" data-name="{{$type->name}}" {{ $item->type_id == $type->id ? 'selected': null }}>{{$type->name}}</option>
                                                                    @else
                                                                        <option value="{{$type->id}}" data-name="{{$type->name}}">{{$type->name}}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="form-group">
                                                        <h5>Tipo
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select class="select2 form-control" id="types" name="type_id">
                                                                <option value="">-- Tipos --</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                @if(isset($item->id))
                                                    <div class="form-group">
                                                        <h5>Subtipos
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select class="select2 form-control" id="subtypes" name="subtype_id">
                                                                <option value="">-- Subtipos --</option>
                                                                @foreach ($subtypes as $subtype)
                                                                    @if(isset($item->subtype_id))
                                                                        <option value="{{$subtype->id}}" {{ $item->subtype_id == $subtype->id ? 'selected': null }}>{{$subtype->name}}</option>
                                                                    @else
                                                                        <option value="{{$subtype->id}}">{{$subtype->name}}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="form-group">
                                                        <h5>Subtipos
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select class="select2 form-control" id="subtypes" name="subtype_id">
                                                                <option value="">-- Subtipos --</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-4 col-md-12" id="actField">
                                                <div class="form-group">
                                                    <h5>N. do Ato
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="number" id="act" name="act" class="form-control {{ isset($item->act) ? 'active' :null }}" value="{{ isset($item->act) ? $item->act : '' }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 hidden" id="competencesField">
                                                <div class="form-group">
                                                    <h5>Competências
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <select class="select2 form-control" id="competences" name="competence_id">
                                                            <option value="">-- Competencias --</option>
                                                            @foreach ($competences as $competence)
                                                                @if(isset($item->competence_id))
                                                                    <option value="{{$competence->id}}" {{ $item->competence_id == $competence->id ? 'selected': null }}>{{$competence->name}}</option>
                                                                @else
                                                                    <option value="{{$competence->id}}">{{$competence->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Ano
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <select class="select2 form-control" name="year">
                                                            <option value="">-- Anos --</option>
                                                            @foreach ($years as $year)
                                                                @if(isset($item->year))
                                                                    <option value="{{$year}}" {{ $item->year == $year ? 'selected': null }}>{{$year}}</option>
                                                                @else
                                                                    <option value="{{$year}}">{{$year}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Layouts
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <select class="select2 form-control" id="layout" name="layout_id">
                                                            <option value="">-- Layouts --</option>
                                                            @foreach ($layouts as $layout)
                                                                @if(isset($item->layout_id))
                                                                    <option data-width="{{$layout->width}}" data-height="{{$layout->height}}" value="{{$layout->id}}" {{ $item->layout_id == $layout->id ? 'selected': null }}>{{$layout->name}}</option>
                                                                @else
                                                                    <option data-width="{{$layout->width}}" data-height="{{$layout->height}}" value="{{$layout->id}}">{{$layout->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Título
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="text" name="title" class="form-control {{ isset($item->title) ? 'active' :null }}" required value="{{ isset($item->title) ? $item->title : '' }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 justify-content-center">
                                                    <div class="form-group">
                                                        <h5>Conteúdo
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <!-- The toolbar will be rendered in this container. -->
                                                        <div id="toolbar-container"></div>
                                                        <div id="editor" width="100px" heigth="400px">
                                                            
                                                        </div>
                                                        <div class="controls">
                                                            <textarea name="content" id="ckeditor" cols="20" rows="10" class="ckeditor">{{ $item->content }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="text-right">
                                                    <button type="reset" class="btn btn-danger">Resetar <i class="la la-refresh position-right"></i></button>
                                                    <button type="submit" class="btn btn-success">Salvar <i class="la la-check position-right"></i></button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Input Validation end -->
        </div>
    </div>
@endsection
@push('link')
@endpush
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/pages/form-select2-exemple.js') }}"></script>
    <script>
        var CleanWordHTML = function ( str )
        {
            str = str.replace(/<o:p>\s*<\/o:p>/g, "") ;
            str = str.replace(/<o:p>.*?<\/o:p>/g, "&nbsp;") ;
            str = str.replace( /\s*mso-[^:]+:[^;"]+;?/gi, "" ) ;
            str = str.replace( /\s*MARGIN: 0cm 0cm 0pt\s*;/gi, "" ) ;
            str = str.replace( /\s*MARGIN: 0cm 0cm 0pt\s*"/gi, "\"" ) ;
            str = str.replace( /\s*TEXT-INDENT: 0cm\s*;/gi, "" ) ;
            str = str.replace( /\s*TEXT-INDENT: 0cm\s*"/gi, "\"" ) ;
            str = str.replace( /\s*TEXT-ALIGN: [^\s;]+;?"/gi, "\"" ) ;
            str = str.replace( /\s*PAGE-BREAK-BEFORE: [^\s;]+;?"/gi, "\"" ) ;
            str = str.replace( /\s*FONT-VARIANT: [^\s;]+;?"/gi, "\"" ) ;
            str = str.replace( /\s*tab-stops:[^;"]*;?/gi, "" ) ;
            str = str.replace( /\s*tab-stops:[^"]*/gi, "" ) ;
            str = str.replace( /\s*face="[^"]*"/gi, "" ) ;
            str = str.replace( /\s*face=[^ >]*/gi, "" ) ;
            str = str.replace( /\s*FONT-FAMILY:[^;"]*;?/gi, "" ) ;
            str = str.replace(/<(\w[^>]*) class=([^ |>]*)([^>]*)/gi, "<$1$3") ;
            str = str.replace( /<(\w[^>]*) style="([^\"]*)"([^>]*)/gi, "<$1$3" ) ;
            str = str.replace( /\s*style="\s*"/gi, '' ) ; 
            str = str.replace( /<SPAN\s*[^>]*>\s*&nbsp;\s*<\/SPAN>/gi, '&nbsp;' ) ; 
            str = str.replace( /<SPAN\s*[^>]*><\/SPAN>/gi, '' ) ; 
            str = str.replace(/<(\w[^>]*) lang=([^ |>]*)([^>]*)/gi, "<$1$3") ; 
            str = str.replace( /<SPAN\s*>(.*?)<\/SPAN>/gi, '$1' ) ; 
            str = str.replace( /<FONT\s*>(.*?)<\/FONT>/gi, '$1' ) ;
            str = str.replace(/<\\?\?xml[^>]*>/gi, "") ; 
            str = str.replace(/<\/?\w+:[^>]*>/gi, "") ; 
            str = str.replace( /<H\d>\s*<\/H\d>/gi, '' ) ;
            str = str.replace( /<H1([^>]*)>/gi, '' ) ;
            str = str.replace( /<H2([^>]*)>/gi, '' ) ;
            str = str.replace( /<H3([^>]*)>/gi, '' ) ;
            str = str.replace( /<H4([^>]*)>/gi, '' ) ;
            str = str.replace( /<H5([^>]*)>/gi, '' ) ;
            str = str.replace( /<H6([^>]*)>/gi, '' ) ;
            str = str.replace( /<\/H\d>/gi, '<br>' ) ; //remove this to take out breaks where Heading tags were 
            str = str.replace( /<(U|I|STRIKE)>&nbsp;<\/\1>/g, '&nbsp;' ) ;
            str = str.replace( /<(B|b)>&nbsp;<\/\b|B>/g, '' ) ;
            str = str.replace( /<([^\s>]+)[^>]*>\s*<\/\1>/g, '' ) ;
            str = str.replace( /<([^\s>]+)[^>]*>\s*<\/\1>/g, '' ) ;
            str = str.replace( /<([^\s>]+)[^>]*>\s*<\/\1>/g, '' ) ;
            //some RegEx code for the picky browsers
            var re = new RegExp("(<P)([^>]*>.*?)(<\/P>)","gi") ;
            str = str.replace( re, "<div$2</div>" ) ;
            var re2 = new RegExp("(<font|<FONT)([^*>]*>.*?)(<\/FONT>|<\/font>)","gi") ; 
            str = str.replace( re2, "<div$2</div>") ;
            str = str.replace( /size|SIZE = ([\d]{1})/g, '' ) ;
            return str;
        }

        var cleanPaste = function(html) {
            // Run the standard YUI cleanHTML method
            //html = this.Editor.cleanHTML(html);

            // Remove additional MS Word content
            html = html.replace(/<(\/)*(\\?xml:|meta|link|span|font|del|ins|st1:|[ovwxp]:)((.|\s)*?)>/gi, ''); // Unwanted tags
            html = html.replace(/(class|style|type|start)=("(.*?)"|(\w*))/gi, ''); // Unwanted sttributes
            html = html.replace(/<style(.*?)style>/gi, '');   // Style tags
            html = html.replace(/<script(.*?)script>/gi, ''); // Script tags
            html = html.replace(/<!--(.*?)-->/gi, '');        // HTML comments
            
            return html;
        }

        $('select[id=sections]').change(function () {
            var section = $(this).val();
            $.get('/diario/themes/types/' + section, function (search) {
                $('#types').empty();
                $('#subtypes').empty();
                $('#types').append('<option value=' + '' + '>' + 'Tipo' + '</option>');
                $.each(search, function (key, value) {
                    $('select[name=type_id]').append('<option value=' + value.id + '>' + value.name + '</option>');
                });
            });
        });

        $('select[id=types]').change(function () {
            var type = $(this).val();
            var nameType = $("#types :selected").text();
            if(nameType == 'Relatórios de Gestão'){
                $('#actField').addClass('hidden');
                $('#competencesField').removeClass('hidden');
            }else{
                $('#actField').removeClass('hidden');
                $('#competencesField').addClass('hidden');
            }
            $.get('/diario/themes/subtypes/' + type, function (busca) {
                $('select[name=subtype_id]').empty();
                $.each(busca, function (key, value) {
                    $('select[name=subtype_id]').append('<option value=' + value.id + '>' + value.name + '</option>');
                });
            });
        });

        $('#layout').change(function(){
            var height = $(this).find(':selected').attr('data-height');
            var width = $(this).find(':selected').attr('data-width');

            var editor = CKEDITOR.instances['ckeditor'];
            editor.resize(parseInt(width), parseInt(height));
        });

        $( "#form-theme" ).submit(function( event ) {
            //event.preventDefault();

            var text = '';
            text = CleanWordHTML(CKEDITOR.instances['ckeditor'].getData());
            text = cleanPaste(text);
            
            CKEDITOR.instances['ckeditor'].setData(text);
            return;
        });

        // $( "#form-theme" ).submit(function( event ) {
        //     $("#ckeditor").val($("#editor").html());
        //     //event.preventDefault();
        // });
    </script>
@endpush

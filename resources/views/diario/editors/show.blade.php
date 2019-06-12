@extends('layouts.app')
@section('title', 'Diário Oficial')
@push('scripts')
@endpush
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">{{$ctrl['name']}}</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group">
                <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1" data-toggle="modal" data-target="#default">
                    <i class="la la-close"></i> Reprovar
                </button>
                <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                          aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="myModalLabel1">Formulário de Reprovação</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route($ctrl['route'].'.message', $item->id) }}">
                                        <div class="md-form">
                                            <i class="mdi mdi-account prefix"></i>
                                            <input type="text" id="title" name="title" class="form-control"  size="65" maxlength="255" required autocomplete="off" autofocus>
                                            <label for="title" data-error="wrong" data-success="right">Título</label>
                                        </div>
                                        <div class="md-form">
                                            <i class="mdi mdi-account prefix"></i>
                                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                            <label for="title" data-error="wrong" data-success="right">Mensagem</label>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Fechar</button>
                                  <button type="submit" class="btn btn-outline-primary">Salvar</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
            </div>
            <div class="btn-group float-md-right" role="group">
                <form action="{{ route($ctrl['route'].'.approves', $item->id) }}">
                    <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1">
                        <i class="la la-check"></i> Aprovar
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="content-body">
        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Aprovar / Desaprovar Matéria</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <p class="card-text"></p>
                                <div class="row">
                                    <div class="col-md-1"><strong>Diário:</strong></div>
                                    <div class="col-md-3 mb-2">{{$item->daily->description}}</div>
                                    <div class="col-md-1"><strong>Data:</strong></div>
                                    <div class="col-md-3">{{Helper::formatDate($item->daily->date_released)}}</div>
                                    <div class="col-md-1"><strong>Criado por:</strong></div>
                                    <div class="col-md-3 mb-2">{{$user->name}}</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-1"><strong>Órgão:</strong></div>
                                    <div class="col-md-3 mb-2">{{$item->agency->name}}</div>
                                    <div class="col-md-1"><strong>Tipo:</strong></div>
                                    <div class="col-md-3">{{$item->type->name}}</div>
                                    <div class="col-md-1"><strong>Subtipo:</strong></div>
                                    <div class="col-md-3 mb-2">{{$item->subtype->name}}</div>
                                </div>
                                <hr>
                                <div class="row">
                                    @if(isset($item->competence_id))
                                        <div class="col-md-1"><strong>Competência:</strong></div>
                                        <div class="col-md-3 mb-2">{{$item->competence->name}}</div>
                                    @else
                                        <div class="col-md-1"><strong>Nº do Ato:</strong></div>
                                        <div class="col-md-3 mb-2">{{$item->act}}</div>
                                    @endif
                                    <div class="col-md-1"><strong>Ano:</strong></div>
                                    <div class="col-md-3">{{$item->year}}</div>
                                    <div class="col-md-1"><strong>Layout:</strong></div>
                                    <div class="col-md-3 mb-2">{{$item->layout->name}}</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 text-center mb-2"><strong>Título</strong></div>
                                    <div class="col-md-12 text-center">{{$item->title}}</div>
                                </div>
                                <hr>
                                <div class="row">
                                    @if($item->file != null && $item->content == null)
                                        <div class="col-md-12 text-center mb-3"><strong>Baixar Conteúdo</strong></div>
                                        <div class="col-md-12 text-center"><a href="{{ Storage::url($item->file) }}" target="_blank"><i class="mdi mdi-download"></i></a></div>
                                        <form id="form-theme" class="form-horizontal" method="POST" action="{{ route('editors.replicate', $item->id) }}">
                                            {{ method_field('put') }}
                                            @csrf
                                            <div class="row justify-content-center">
                                                <div class="col-lg-12 col-md-12 justify-content-center">
                                                    <div class="form-group">
                                                        <h5>Conteúdo
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <textarea name="content" id="ckeditor" cols="30" rows="10" class="ckeditor">{{ $item->content }}</textarea>
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
                                    @elseif($item->file != null && $item->content != null)
                                        <div class="col-md-12 text-center mb-3"><strong>Baixar Conteúdo</strong></div>
                                        <div class="col-md-12 text-center"><a href="{{ Storage::url($item->file) }}" target="_blank"><i class="mdi mdi-download"></i></a></div>
                                        <div class="col-md-12 text-center mb-3"><strong>Conteúdo</strong></div>
                                        <div class="controls">
                                            <textarea name="content" id="ckeditor" cols="30" rows="10" class="ckeditor">{{ $item->content }}</textarea>
                                        </div>
                                    @else
                                        <div class="col-md-12 text-center mb-3"><strong>Conteúdo</strong></div>
                                        <div class="controls">
                                            <textarea name="content" id="ckeditor" cols="30" rows="10" class="ckeditor">{{ $item->content }}</textarea>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($item->dailySync()->exists())
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Repetição de Matérias</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <p class="card-text"></p>
                                    @foreach ($item->dailySync()->get() as $repeat)
                                        <div class="row">
                                            <div class="col-md-1"><strong>Diário:</strong></div>
                                            <div class="col-md-3 mb-2">{{$repeat->description}}</div>
                                            <div class="col-md-1"><strong>Data:</strong></div>
                                            <div class="col-md-3">{{Helper::formatDate($repeat->date_released)}}</div>
                                            <div class="col-md-1"><strong>Nº Diário:</strong></div>
                                            <div class="col-md-3 mb-2">{{$repeat->id}}</div>
                                        </div>
                                    @endforeach
                                    <hr>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
@push('link')
@endpush
@push('scripts')
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

        $( "#form-theme" ).submit(function( event ) {
            //event.preventDefault();

            var text = '';
            text = CleanWordHTML(CKEDITOR.instances['ckeditor'].getData());
            text = cleanPaste(text);
            
            CKEDITOR.instances['ckeditor'].setData(text);
            return;
        });

    </script>
@endpush

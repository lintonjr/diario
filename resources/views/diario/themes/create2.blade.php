<div class="modal-dialog fullscreen" id="modal-dialog" role="document" >
  <div class="modal-content">
    <form id="form-item-store" method="POST" @if( isset($item->id)) action="{{ route($ctrl['route'].'.update', $item->id) }}">
      {{ method_field('put') }}
      @else
      action="{{ route($ctrl['route'].'.store') }}">
      @endif
      {{ csrf_field() }}

      <div class="modal-header bg-white border-0 p-0">
        <div class="col-md-12">
          <h1 class="font-medium-2 text-bold-600 mb-1 mt-2">Dados da Publicação <div id="hora"></div></h1>
          <hr class="mb-1">
        </div>
      </div>

      <div class="modal-body scrollbar-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div id="error_all"  role="alert">
                    </div>
                    <div class="md-form">
                        <input type="text" id="name_daily" name="name_daily" value="{{ $daily->description }}" class="form-control {{ isset($daily->description) ? 'active' :null }}" size="65" maxlength="255" required autocomplete="off" disabled>
                        <label for="name_daily" data-error="wrong" data-success="right" class="{{ isset($daily->description) ? 'active' :null }}">Diário</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="md-form">
                        <input type="text" id="date_released" name="date_released" value="{{ Helper::formatDate($daily->date_released) }}" class="form-control {{ isset($daily->date_released) ? 'active' :null }}" size="65" maxlength="255" required autocomplete="off" disabled>
                        <label for="date_released" data-error="wrong" data-success="right" class="{{ isset($daily->date_released) ? 'active' :null }}">Data</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="md-form">
                        <input type="text" id="closed_date" name="closed_date" value="{{ \Helper::formatDate(\Helper::proximoDiaUtil($dateDaily)).' 18:00' }}" class="form-control" size="65" maxlength="255" required autocomplete="off" disabled>
                        <label for="closed_date" data-error="wrong" data-success="right" class="{{ isset($daily->date_released) ? 'active' :null }}">Data de fechamento</label>
                    </div>
                    <input type="hidden" id="daily_id" name="daily_id" value="{{ $daily->id }}">
                    <input type="hidden" id="user_created" name="user_created" value="{{ \Auth::user()->id }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    @if(isset($item->id))
                        <div class="md-form">
                            <span class="prefix">xxxxx</span>
                            <label for="repeat[]">Repetir Matéria?</label>
                            <select id="multiRepeat" class="form-control" name="repeat[]" multiple="multiple">
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
                    @else
                        <div class="md-form">
                            <span class="small">Repetir Matéria?</span>
                            <select id="multiRepeat" class="form-control" name="repeat[]" multiple="multiple">
                                @foreach ($dailiesRepeat as $dailyRepeat)
                                    <option value="{{$dailyRepeat->id}}" {{ $item->dailyRepeat_id == $dailyRepeat->id ? 'selected': null }}>{{\Helper::formatDate($dailyRepeat->date_released)}}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                </div>
                <div class="col-md-3">
                    <div class="md-form">
                        <span class="prefix"></span>
                        <select class="form-control select" id="select" name="agency_id" >
                            <option value="">Orgãos</option>
                            @foreach ($agencies as $agency)
                                <option value="{{$agency->id}}" {{ $item->agency_id == $agency->id ? 'selected': null }}>{{$agency->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="md-form">
                        <span class="prefix"></span>
                        <select class="form-control" id="sections" name="section_id" >
                            <option value="">Cadernos</option>
                            @foreach ($sections as $section)
                                <option value="{{$section->id}}" data-name="{{$section->name}}" {{ $item->section_id == $section->id ? 'selected': null }}>{{$section->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    @if(isset($item->id))
                        <div class="md-form">
                            <span class="prefix"></span>
                            <select class="form-control" id="types" name="type_id" >
                                <option value="">Tipo de Matéria</option>
                                @foreach ($types as $type)
                                    <option value="{{$type->id}}" data-name="{{$type->name}}" {{ $item->type_id == $type->id ? 'selected': null }}>{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    @else
                        <div class="md-form">
                            <span class="prefix"></span>
                            <select name="type_id" id="types">
                                <option value="">Tipos de Matérias</option>
                            </select>
                        </div>
                    @endif
                </div>
                <div class="col-md-3">
                    @if(isset($item->id))
                        <div class="md-form">
                            <span class="prefix"></span>
                            <select class="form-control" id="subtypes" name="subtype_id" >
                                <option value="">Subtipo de Matéria</option>
                                @foreach ($subtypes as $subtype)
                                    <option value="{{$subtype->id}}" {{ $item->subtype_id == $subtype->id ? 'selected': null }}>{{$subtype->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    @else
                        <div class="md-form">
                            <span class="prefix"></span>
                            <select name="subtype_id" id="subtypes">
                                <option value="">Subtipos de Matéria</option>
                            </select>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="md-form" id="actField">
                        <i class="mdi mdi-file-outline prefix"></i>
                        <input type="number" id="act" name="act" value="{{ $item->act }}" class="form-control text-right {{ isset($item->act) ? 'active' :null }}">
                        <label for="act" data-error="wrong" data-success="right" class="{{ isset($item->act) ? 'active' :null }}">Nº do Ato</label>
                    </div>
                    <div class="md-form">
                        <span class="prefix"></span>
                        <select class="form-control hidden" id="competences" name="competence_id">
                            <option value="">Competência</option>
                            @foreach ($competences as $competence)
                                <option value="{{$competence->id}}" {{ $item->competence_id == $competence->id ? 'selected': null }}>{{$competence->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="md-form">
                        <span class="prefix"></span>
                        <select class="form-control" id="year" name="year">
                            <option value="">Ano</option>
                            @foreach ($years as $year)
                                <option value="{{$year}}" {{ $item->year == $year ? 'selected': null }}>{{$year}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="md-form">
                        <span class="prefix"></span>
                        <select class="form-control select" id="select" name="layout_id" >
                            <option value="">Layouts</option>
                            @foreach ($layouts as $layout)
                                <option value="{{$layout->id}}" {{ $item->layout_id == $layout->id ? 'selected': null }}>{{$layout->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="md-form">
                        <i class="mdi mdi-file-outline prefix"></i>
                        <input type="text" id="title" name="title" value="{{ $item->title }}" class="form-control text-right {{ isset($item->title) ? 'active' :null }}">
                        <label for="title" data-error="wrong" data-success="right" class="{{ isset($item->title) ? 'active' :null }}">Título</label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="md-form">
                        <textarea name="content" id="ckeditor" cols="30" rows="10" class="ckeditor">{{ $item->content }}</textarea>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        {{ csrf_field() }}
        <a href="#" class="swal-button swal-button--cancel btn-warning swal-button--loading" data-dismiss="modal"><i class="mdi mdi-close"></i> CANCELAR</a>
        <button type="submit" class="swal-button swal-button--success btn-success"><i class="mdi mdi-content-save"></i> SALVAR</button>
      </div>
    </form>
  </div>
</div>

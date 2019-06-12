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
                    <a accesskey="V" class="btn btn-primary btn-min-width mr-1 mb-1" role="button" href="{{ route($ctrl['route'].'.index') }}">
                        <i class="la la-arrow-left"></i> Voltar
                    </a>
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
                                <h4 class="card-title">Layouts</h4>
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
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form class="form-horizontal" method="POST" novalidate @if( isset($item->id)) action="{{ route($ctrl['route'].'.update', $item->id) }}">
                                        {{ method_field('put') }}
                                        @else
                                            action="{{ route($ctrl['route'].'.store') }}">
                                        @endif
                                            @csrf
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <h5>Nome
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" class="form-control {{ isset($item->name) ? 'active' :null }}" required value="{{ isset($item->name) ? $item->name : '' }}" autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Padrão de Layout
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <select class="select2 form-control" name="layout_pattern_id">
                                                            <option value="">Padrão de Layout</option>
                                                            @foreach ($layoutPatterns as $layoutPattern)
                                                                @if(isset($item->layout_pattern_id))
                                                                    <option value="{{$layoutPattern->id}}" {{ $item->layout_pattern_id == $layoutPattern->id ? 'selected': null }}>{{$layoutPattern->name}}</option>
                                                                @else
                                                                    <option value="{{$layoutPattern->id}}">{{$layoutPattern->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Largura
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="number" name="width" class="form-control {{ isset($item->width) ? 'active' :null }}" required value="{{ isset($item->width) ? $item->width : '' }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Altura
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="number" name="height" class="form-control {{ isset($item->height) ? 'active' :null }}" required value="{{ isset($item->height) ? $item->height : '' }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="text-right">
                                                    <button type="reset" class="btn btn-danger">Resetar <i class="la la-refresh position-right"></i></button>
                                                    <button type="submit" class="btn btn-success" id="btn-save">Salvar <i class="la la-check position-right"></i></button>
                                                </div>
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
    <script src="{{asset('js/general-scripts.js')}}" type="text/javascript"></script>
@endpush

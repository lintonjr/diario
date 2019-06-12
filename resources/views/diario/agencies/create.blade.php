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
                                <h4 class="card-title">Cadastrar um novo Órgão</h4>
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
                                                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }} {{ isset($item->name) ? 'active' :null }}" required data-validation-required-message="Este Campo é obrigatório" value="{{ isset($item->name) ? $item->name :  old('name') }}" autofocus>
                                                        @if ($errors->has('name'))
                                                            <div class="invalid-feedback" >
                                                                {{ $errors->first('name') }}
                                                            </div>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>CNPJ
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="cnpj" class="form-control cnpj {{ isset($item->cnpj) ? 'active' :null }}" value="{{ isset($item->cnpj) ? $item->cnpj : old('cnpj') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Sigla
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="initials" class="form-control {{ isset($item->initials) ? 'active' :null }}" required data-validation-required-message="Este Campo é obrigatório" value="{{ isset($item->initials) ? $item->initials : old('initials') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Categoria
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <select class="select2 form-control" name="category_id">
                                                            <option value="">Categorias</option>
                                                            @foreach ($categories as $category)
                                                                @if(isset($item->category_id))
                                                                    <option value="{{$category->id}}" {{ $item->category_id == $category->id ? 'selected': null }}>{{$category->name}}</option>
                                                                @else
                                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            @if(\Auth::user()->roles->first()->name != "Gestor da Entidade")
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Entidades
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select class="select2 form-control" name="entity_id">
                                                                <option value="">Entidades</option>
                                                                @foreach ($entities as $entity)
                                                                    @if(isset($item->entity_id))
                                                                        <option value="{{$entity->id}}" {{ $item->entity_id == $entity->id ? 'selected': null }}>{{$entity->name}}</option>
                                                                    @else
                                                                        <option value="{{$entity->id}}">{{$entity->name}}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="col-lg-12 col-md-12">
                                                <div class="text-right">
                                                    <button type="reset" class="btn btn-danger">Resetar <i class="la la-refresh position-right"></i></button>
                                                    <button type="submit" class="btn btn-success">Salvar <i class="la la-check position-right"></i></button>
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
    <script type="text/javascript" src="{{ asset('js/pages/jquery.mask.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
        });
    </script>
@endpush

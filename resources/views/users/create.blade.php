@extends('layouts.app')
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
                                <h4 class="card-title">Usuários</h4>
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
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Nome
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" class="form-control {{ isset($item->name) ? 'active' :null }}" required value="{{ isset($item->name) ? $item->name : old('name') }}" autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>E-mail
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} {{ isset($item->email) ? 'active' :null }}" value="{{ isset($item->email) ? $item->email : old('email') }}">
                                                        @if ($errors->has('email'))
                                                            <div class="invalid-feedback" >
                                                                {{ $errors->first('email') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            @if(isset($item))
                                                @if($item->roles->first()->name == "Gestor da Entidade")
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <h5>Entidade
                                                                <span class="required"></span>
                                                            </h5>
                                                            <div class="controls">
                                                                <select class="select2 form-control" name="entity_id">
                                                                    <option value=""></option>
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
                                            @endif
                                            @if(!isset($item))
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Papel
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select class="select2 form-control" name="role_id" required>
                                                                <option value="">Pápeis</option>
                                                                @foreach ($roles as $role)
                                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if(!isset($item))
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Clientes
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select class="select2 form-control" name="client_id" id="clients" required>
                                                                <option value="">Clientes</option>
                                                                @foreach ($clients as $client)
                                                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if(!isset($item))
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Entidade</h5>
                                                        <div class="controls">
                                                            <select class="select2 form-control" name="entity_id" id="entity">
                                                                <option value=""></option>
                                                            </select>
                                                            @if ($errors->has('entity_id'))
                                                            <div class="invalid-feedback" >
                                                                {{ $errors->first('entity_id') }}
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if(!isset($item))
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Órgão
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select class="select2 form-control" name="agency_id[]" id="agency_id" multiple="multiple">
                                                                <option value="">Órgãos</option>                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Senha
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}">
                                                    </div>
                                                    @if ($errors->has('password'))
                                                        <div class="invalid-feedback" >
                                                            {{ $errors->first('password') }}
                                                        </div>
                                                    @endif
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
    <script src="{{asset('js/general-scripts.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/pages/form-select2-exemple.js') }}"></script>
    <script>
        $('#clients').change(function () {
            var id = $(this).val();
            $.get('/users/entities/' + id, function (search) {
                $('#entity').empty();
                $('#entity').append('<option></option>');
                $.each(search, function (key, value) {
                    $('#entity').append('<option value=' + value.id + '>' + value.name + '</option>');
                });
            });
        });

        $('#entity').change(function () {
            var id = $(this).val();
            $.get('/users/agencies/' + id, function (search) {
                $('#agency_id').empty();
                $('#agency_id').append('<option>' + 'Órgãos' + '</option>');
                $.each(search, function (key, value) {
                    $('#agency_id').append('<option value=' + value.id + '>' + value.name + '</option>');
                });
            });
        });
    </script>
@endpush

@extends('layouts.app')
@section('title', 'Diário Oficial')
@push('scripts')
    <link rel="stylesheet" type="text/css" href="{{asset('modern/vendors/css/tables/datatable/datatables.min.css')}}">
@endpush
@section('content')
<div class="content-wrapper bg-hexagons">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">{{$ctrl['name']}}</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group">
                <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1" onclick="window.location.href = '{{ route($ctrl['route'].'.index') }}';">
                        <i class="la la-arrow-left"></i> Voltar
                </button>
            </div>
        </div>
    </div>
    <div class="content-body">
        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Adicionar Client à {{$item->name}}</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <p class="card-text">@include('layouts.flash-message')</p>
                                <form id="" method="POST" action="{{ route($ctrl['route'].'.syncclient', $item->id) }}">
                                    {{ csrf_field() }}
                                    <div class="row justify-content-center">
                                        <div class="col-lg-10 col-md-12">
                                            <div class="form-group">
                                                <h5>Clientes
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <select class="select2 form-control" name="client_id[]" multiple="multiple">
                                                        <option value="">Clientes</option>
                                                        @foreach ($clients as $client)
                                                            @if(isset($item->client_id))
                                                                <option value="{{$client->id}}" {{ $item->client_id == $client->id ? 'selected': null }}>{{$client->name}}</option>
                                                            @else
                                                                <option value="{{$client->id}}">{{$client->name}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
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
        <!-- Zero configuration table -->
        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Listagem de Clientes de {{$item->name}}</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <p class="card-text">@include('layouts.flash-message')</p>
                                <table id="tbl-padrao" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Cliente</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Zero configuration table -->
    </div>
</div>
@endsection
@push('link')
@endpush
@push('scripts')
    <script src="{{asset('modern/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/datatables-model.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/general-scripts.js')}}" type="text/javascript"></script>

    <script>
        var url = '{{ route($ctrl['route'].'.getclients') }}';
        var token = "{{csrf_token()}}";
        var data_id = '{{$item->id}}';

        var oTable;
        var aLengthMenuCustom = [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "Todos"]
        ];

        var arrayColumns = [ 0,1,2 ];
        var titleCustom = 'relacao_de_itens';
        var buttonsCustom = {
            extend: 'collection',
            text: 'Exportar',
            buttons: [
                { extend: 'copy', text: 'Copiar', title: titleCustom, exportOptions: {  columns: arrayColumns  }},
                { extend: 'excel', text: 'Excel', title: titleCustom, exportOptions: {  columns: arrayColumns  }},
                { extend: 'pdf', text: 'PDF', title: titleCustom, exportOptions: {  columns: arrayColumns  }}
            ]
        }

        var columnsCustom = [
            { data: 'name', name: 'name' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    </script>
    <script type="text/javascript" src="{{ asset('js/pages/form-select2-exemple.js') }}"></script>
@endpush

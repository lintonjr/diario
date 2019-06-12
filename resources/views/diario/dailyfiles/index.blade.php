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
                {{-- <a  accesskey="N" class="btn btn-primary btn-min-width mr-1 mb-1" role="button" href="{{ route($ctrl['route'].'.create') }}">
                    <i class="la la-plus"></i> Novo
                </a> --}}
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Zero configuration table -->
        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{$ctrl['name']}} cadastrados</h4>
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
                                <div class='table-responsive'>
                                <table id="tbl-padrao" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>Descrição</th>
                                            <th>Número</th>
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
        var url = '{{ route($ctrl['route'].'.list') }}';
        var token = "{{csrf_token()}}";
        var oTable;
        var aLengthMenuCustom = [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "Todos"]
        ];

        var arrayColumns = [ 0,1,2 ];
        var titleCustom = 'relacao_de_diarios';
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
            { data: 'date_released', name: 'date_released' },
            { data: 'description', name: 'description' },
            { data: 'number', name: 'number' },
            { data: 'client.name', name: 'client.name' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    </script>
@endpush

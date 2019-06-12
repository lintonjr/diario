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
                    <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1" onclick="window.location.href = '{{ route($ctrl['route'].'.index') }}';">
                        <i class="la la-arrow-left"></i> Voltar
                    </button>
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
                                <h4 class="card-title">Cadastrar novos Diários</h4>
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
                                                    <h5>Descrição
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="description" class="form-control {{ isset($item->description) ? 'active' :null }}" required data-validation-required-message="Este Campo é obrigatório" value="{{ isset($item->description) ? $item->description : old('description') }}" autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Nº
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="number" class="form-control {{ isset($item->number) ? 'active' :null }}" required data-validation-required-message="Este Campo é obrigatório" value="{{ isset($item->number) ? $item->number : old('number') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Cliente
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <select class="select2 form-control" name="client_id">
                                                            <option value="">cliente</option>
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
                                            @if(isset($item->id))
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Data
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type='text' name="date" class="form-control date {{ isset($item->date_released) ? 'active' :null }}" value="{{ isset($item->date_released) ? \Helper::formatDate($item->date_released) : '' }}"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Datas
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type='text' name="date" class="form-control datarange-diario" placeholder="Selecione as datas"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Ano
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="year" class="form-control {{ isset($item->year) ? 'active' :null }}" required data-validation-required-message="Este Campo é obrigatório" value="{{ isset($item->year) ? $item->getOriginal('year') : old('year') }}">
                                                    </div>
                                                </div>
                                            </div>
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
    <script type="text/javascript" src="{{asset('js/pages/switch.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/pages/jquery.mask.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.date').mask('00/00/0000');
        });
    </script>
    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1;
        var yyyy = today.getFullYear();
        var dayplus = today.getDate()+30;
        if(dd<10) {
            dd = '0'+dd
        }
        if(dayplus<10) {
            dayplus = '0'+dayplus
        }

        if(mm<10) {
            mm = '0'+mm
        }

        today = dd + '/' + mm + '/' + yyyy;
        limit = dayplus + '/' + mm + '/' + yyyy;
        $('.pickadate-diario').pickadate({
            disable: [
                1,7
            ],
            min: [yyyy,mm,dd],
            max: [yyyy,mm,dayplus]
        });
        $('.dateLimit').daterangepicker({
            dateLimit: {
                days: 5
            },
            disable: [
                1,7
            ],
            min: [yyyy,mm,dd],
            max: [yyyy,mm,dayplus]
        });

        $('.datarange-diario').daterangepicker({
            "autoApply": true,
            "locale": {
                "format": "DD/MM/YYYY",
                "separator": " - ",
                "applyLabel": "Aplicar",
                "cancelLabel": "Cancelar",
                "fromLabel": "De",
                "toLabel": "Para",
                "customRangeLabel": "Custom",
                "weekLabel": "W",
                "daysOfWeek": [
                    "Dom",
                    "Seg",
                    "Ter",
                    "Qua",
                    "Qui",
                    "Sex",
                    "Sab"
                ],
                "monthNames": [
                    "Janeiro",
                    "Fevereiro",
                    "Março",
                    "Abril",
                    "Março",
                    "Junho",
                    "Julho",
                    "Agosto",
                    "Setembro",
                    "Outubro",
                    "Novembro",
                    "Dezembro"
                ],
                "firstDay": 1
            },
            "minDate": today,
            "maxDate": limit
            });
    </script>
@endpush

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Revenue, Hit Rate & Deals -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-12">
                        <div class="card pull-up">
                            <div class="card-header">
                                <h4 class="card-title">Publicações</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body pt-0">
                                    <div class="row mb-1">
                                        <div class="col-6 col-md-4">
                                            <h5>Esta Semana</h5>
                                            <h2 class="danger">72</h2>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <h5>Semana Passada</h5>
                                            <h2 class="text-muted">118</h2>
                                        </div>
                                    </div>
                                    <div class="chartjs">
                                        <canvas id="thisYearRevenue" width="400" style="position: absolute;"></canvas>
                                        <canvas id="lastYearRevenue" width="400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="card pull-up">
                                    <div class="card-header bg-hexagons">
                                        <h4 class="card-title">Aprovações
                                        <span class="danger">-12%</span>
                                        </h4>
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content collapse show bg-hexagons">
                                        <div class="card-body pt-0">
                                            <div class="chartjs">
                                                <canvas id="hit-rate-doughnut" height="275"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="card pull-up">
                                    <div class="card-content collapse show bg-gradient-directional-danger ">
                                        <div class="card-body bg-hexagons-danger">
                                            <h4 class="card-title white">Aproveitamento
                                            <span class="white">-55%</span>
                                            <span class="float-right">
                                            <span class="white">152</span>
                                            <span class="red lighten-4">/200</span>
                                            </span>
                                            </h4>
                                            <div class="chartjs">
                                                <canvas id="deals-doughnut" height="275"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="card pull-up">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h6 class="text-muted">Diários Publicados </h6>
                                                    <h3>42</h3>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="icon-trophy success font-large-2 float-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="card pull-up">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h6 class="text-muted">Taxa de revisão</h6>
                                                    <h3>12%</h3>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="icon-call-in danger font-large-2 float-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{ asset('modern/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('modern/vendors/js/charts/raphael-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('modern/vendors/js/charts/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('modern/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('modern/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/dashboard-sales.js') }}" type="text/javascript"></script>
@endpush

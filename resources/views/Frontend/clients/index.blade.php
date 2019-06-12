@extends('Frontend.Layouts.app')
@section('title', 'Lista Clientes')
@section('logo', '')
@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="rounded border p-4">
                        <div class="row align-items-stretch">
                            @foreach($clients as $client)
                                <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                                    <a href="{{route('client.page', $client->alias)}}" class="d-flex post-sm-entry">
                                        <figure class="mr-3 mb-0"><img src="{{asset('hikers/images/img_1.jpg')}}" alt="Image" class="rounded"></figure>
                                        <div>
                                            <span class="post-category bg-danger text-white m-0 mb-2">Cliente</span>
                                            <h2 class="mb-0">{{$client->name}}</h2>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

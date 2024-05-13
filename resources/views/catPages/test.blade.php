@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($services as $service )
            @if($service->category->type->type_cat_id == 3)
                <section id="help-section" class="values">
                    <header class="section-header">
                        <p>Тақырыптар</p>
                    </header>
                    <div class="faq-container">
                        <div class="faq-container">
                            <div class="faq-item">
                                @foreach($services as $service)

                                    <div class="faq-question">{{$service->service_name}}<i class="bi bi-plus"></i></div>
                                    <div class="faq-answer">
                                        {{$service->description}}
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </section>
            @elseif($service->category->type->type_cat_id == 2)
                @foreach($services as $service)
                    <h1 align="center">{{$service->service_name}}</h1>
                    <p align="center">{{$service->description}}</p>
                @endforeach
                @endif
    </div>@endforeach
@endsection

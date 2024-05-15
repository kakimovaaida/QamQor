@extends('layouts.app')

@section('content')
    <style>

        .Wrap {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .Base {
            background: #ccc;
            height: 378px;
            width: 595px;
            border-radius: 15px;
        }

        .Inner-wrap {
            background-color: #21ce55;
            background-image: url("https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvcm0yMThiYXRjaDUtbmluZy0wN18xLmpwZw.jpg");
            background-size: auto 147%;
            background-position: center;
            position: relative;
            height: 100%;
            width: 100%;
            border-radius: 13px;
            padding: 20px 40px;
            box-sizing: border-box;
            color: #fff;
        }

        p {
            margin: 0;
            font-size: 2em;
        }


        .gold path{
            fill: url(#gold-gradient);
        }

        svg {
            display: block;
        }
        ul {
            padding: 0;
        }

        ul li {
            list-style: none;
            float: left;
            margin: 0px 10px;
            font-size: 2.2em;
        }


        .Expire h4 {
            font-weight: 400;
            color: #ffffff;
            margin: 0;
            /*   word-spacing: 9999999px; */
            text-transform: uppercase;
        }

        .Expire p {
            font-size: 1.55em;
            color: rgba(255, 255, 255, 0.9);
        }

        .Name h3 {
            position: absolute;
            bottom: 175px;
            left: 10%;
            text-transform: uppercase;
            font-weight: 400;
            font-size: 30px;
            text-align: center;
            color: rgba(255, 255, 255, 0.85);
        }

        .Visa {
            width: 200px;
            position: absolute;
            bottom: -120px;
            right: 0;
            padding: inherit;
        }
        .Expire p {
            margin-left: 80px;
        }
    </style>
    <div class="container">
        @foreach($services as $serv )
            @if($serv->type->type_cat_id == 1)
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
            @elseif($serv->type->type_cat_id == 2)
                @foreach($services as $service)
                    <h1 align="center">{{$service->service_name}}</h1>
                    <p align="center">{{$service->description}}</p>
                @endforeach
            @else
                @foreach($services as $service)
                    <div class="Wrap">
                        <div class="Base">
                            <div class="Inner-wrap">
                                <div class='Name'>
                                    <h3>  {{$service->service_name}}</h3>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <h2 align="center">{{$service->description}}</h2>
                    <h3 align="right">Мекен-жай:</h3>
                    <h4 align="right">{{$service->contact}}</h4>
                @endforeach


            @endif

    </div>@endforeach
@endsection

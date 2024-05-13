@extends('layouts.app')
@section('content')
    <style>
        /* Shoutout to Maite Rosalie for the gold svg gradient which can be seen here below. */




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
            background-image:url("https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvcm0yMThiYXRjaDUtbmluZy0wN18xLmpwZw.jpg");
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

        /* Controls top right logo */

        .Logo {
            position: absolute;
            height: 80px;
            width: 80px;
            right: 0;
            top: 0;
            padding: inherit;
            fill: #FFFFFF;

        }

        .Chip {
            height: 80px;
            margin: 40px 0 25px 0;
        }

        .gold path{
            fill: url(#gold-gradient);
        }

        svg {
            display: block;
        }

        /* Controls name size */

        .Logo-name {
            transform: scale(.5);
            color: #FFFFFF;
            margin-left: -75px;
        }

        .Card-number p {
            text-align: center;
            color: #FFFFFF;
        }

        .Card-number {
            margin-top: -50px;
            display: flex;
            color: #FFFFFF;
            justify-content: center;
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

        #first-li {
            margin-left: 0;
        }

        #last-li {
            margin-right: 0;
        }

        .Expire {
            font-size: .75em;
            margin-left: 100px;
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
            bottom: 30px;
            left: 18%;
            text-transform: uppercase;
            font-weight: 400;
            font-size: 1.35em;
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

<header class="section-header">
    <p style="color: #0f5645">{{__('toHelp.header1')}}</p>
</header>

<div class="Wrap">
<div class="Base">
    <div class="Inner-wrap">
        <img src="{{asset('assets/img/Logo.png')}}" width="150" height="120" alt=""> Qamqor Qayirimdylyq Qory
        <br><br><br><br>
        <div class="Card-number">
            <ul>
                <li id="first-li">4400</li>
                <li>4301</li>
                <li>0725</li>
                <li id="last-li">1578</li>
            </ul>
        </div>

        <div class='Expire'>
            <h4>Valid Thru</h4>
            <p>02/30</p>
        </div>

        <div class='Name'>
            <h3>QamQor Komek Qory</h3>
        </div>



        <svg
            xmlns:dc="http://purl.org/dc/elements/1.1/"
            xmlns:cc="http://creativecommons.org/ns#"
            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
            xmlns:svg="http://www.w3.org/2000/svg"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
            version="1.1"
            id="Layer_1"
            x="0px"
            y="0px"
            class="Visa"
            width="1000.046"
            height="323.65302"
            viewBox="0 0 1000.046 323.653"
            enable-background="new 0 0 258.381 161.154"
            xml:space="preserve"
            inkscape:version="0.91 r13725"
            sodipodi:docname="Visa_2006.svg"><metadata
                id="metadata23"><rdf:RDF><cc:Work
                        rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type
                            rdf:resource="http://purl.org/dc/dcmitype/StillImage" /><dc:title></dc:title></cc:Work></rdf:RDF></metadata><defs
                id="defs21">

            </defs><sodipodi:namedview
                pagecolor="#ffffff"
                bordercolor="#666666"
                borderopacity="1"
                objecttolerance="10"
                gridtolerance="10"
                guidetolerance="10"
                inkscape:pageopacity="0"
                inkscape:pageshadow="2"
                inkscape:window-width="1366"
                inkscape:window-height="705"
                id="namedview19"
                showgrid="false"
                inkscape:zoom="0.35355339"
                inkscape:cx="34.690897"
                inkscape:cy="131.15483"
                inkscape:window-x="-8"
                inkscape:window-y="-8"
                inkscape:window-maximized="1"
                inkscape:current-layer="Layer_1" />
            <g
                id="g4158"
                transform="matrix(4.4299631,0,0,4.4299631,-81.165783,-105.04783)"><polygon
                    points="116.145,95.719 97.858,95.719 109.296,24.995 127.582,24.995 "
                    id="polygon9"
                    style="fill:#f2f2f2" /><path
                    d="m 182.437,26.724 c -3.607,-1.431 -9.328,-3.011 -16.402,-3.011 -18.059,0 -30.776,9.63 -30.854,23.398 -0.15,10.158 9.105,15.8 16.027,19.187 7.075,3.461 9.48,5.72 9.48,8.805 -0.072,4.738 -5.717,6.922 -10.982,6.922 -7.301,0 -11.213,-1.126 -17.158,-3.762 l -2.408,-1.13 -2.559,15.876 c 4.289,1.954 12.191,3.688 20.395,3.764 19.188,0 31.68,-9.481 31.828,-24.153 0.073,-8.051 -4.814,-14.22 -15.35,-19.261 -6.396,-3.236 -10.313,-5.418 -10.313,-8.729 0.075,-3.01 3.313,-6.093 10.533,-6.093 5.945,-0.151 10.313,1.278 13.622,2.708 l 1.654,0.751 2.487,-15.272 0,0 z"
                    id="path11"
                    inkscape:connector-curvature="0"
                    style="fill:#fff" /><path
                    d="m 206.742,70.664 c 1.506,-4.063 7.301,-19.788 7.301,-19.788 -0.076,0.151 1.503,-4.138 2.406,-6.771 l 1.278,6.094 c 0,0 3.463,16.929 4.215,20.465 -2.858,0 -11.588,0 -15.2,0 l 0,0 z m 22.573,-45.669 -14.145,0 c -4.362,0 -7.676,1.278 -9.558,5.868 l -27.163,64.855 19.188,0 c 0,0 3.159,-8.729 3.838,-10.609 2.105,0 20.771,0 23.479,0 0.525,2.483 2.182,10.609 2.182,10.609 l 16.932,0 -14.753,-70.723 0,0 z"
                    id="path13"
                    inkscape:connector-curvature="0"
                    style="fill:#fff" /><path
                    d="M 82.584,24.995 64.675,73.222 62.718,63.441 C 59.407,52.155 49.023,39.893 37.435,33.796 l 16.404,61.848 19.338,0 28.744,-70.649 -19.337,0 0,0 z"
                    id="path15"
                    inkscape:connector-curvature="0"
                    style="fill:#fff" /><path
                    d="m 48.045,24.995 -29.422,0 -0.301,1.429 c 22.951,5.869 38.151,20.016 44.396,37.02 L 56.322,30.94 c -1.053,-4.517 -4.289,-5.796 -8.277,-5.945 l 0,0 z"
                    id="path17"
                    inkscape:connector-curvature="0"
                    style="fill:#fff" /></g>
      </svg>

    </div>
</div>
</div>
    <br><br>
    <div class="container">

        <header class="section-header">
            <p style="color: #0f5645">{{__('toHelp.header2')}}</p>
        </header>
        <div class="container-sm" style="max-width: 800px; border-radius: 20px;">
            <div class="col-lg">
                <form  action="{{ route('employee.requests') }}" method="post">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" placeholder="{{__('toHelp.placeholder1')}}" required>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 ">
                            <input type="text" class="form-control  @error('surname') is-invalid @enderror" name="surname" placeholder="{{__('toHelp.placeholder2')}}" required>
                            @error('surname')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="{{__('toHelp.placeholder3')}}" required>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 ">
                            <input type="text" class="form-control  @error('age') is-invalid @enderror" name="age" placeholder="{{__('toHelp.placeholder4')}}" required>
                            @error('age')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control  @error('content') is-invalid @enderror" name="content" rows="6" placeholder="{{__('toHelp.placeholder5')}}" required></textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone" placeholder="{{__('toHelp.placeholder6')}}" required>
                            @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-primary" style="background-color: #d58041" type="submit">{{__('toHelp.submit')}}</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

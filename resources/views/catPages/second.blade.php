@extends('layouts.app')
@section('content')

    <div class="container">
        <!-- ======= Values Section ======= -->
        <section id="/Help" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p style="color: #0f5645">Көмек түрлері</p>
                </header>

                <div class="row">
                    @foreach($categories as $cat)
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="box" style="background-color: #0f5645">
                                <a href="{{route('services.category',$cat->id)}}" style="text-decoration: none; color: #d58041"><h3>{{$cat->Name}}</h3></a><br>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
@endsection


@extends('layouts.app')
@section('content')
<div class="container">
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2  style="color: #d58041">{{__('help.title')}}</h2>
            <p  style="color: #0f5645">{{__('help.desc')}}</p>
        </header>

        <div class="row gy-4">

            <div class="col-lg-6">

                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-geo-alt" style="color: #d58041"></i>
                            <h3 style="color: #0f5645">{{__('help.location_title')}}</h3>
                            <p style="color: #d58041">{{__('help.location_desc1')}}<br>{{__('help.location_desc2')}}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-telephone" style="color: #d58041"></i>
                            <h3 style="color: #0f5645">{{__('help.contacts_title')}}</h3>
                            <p style="color: #d58041">{{__('help.contacts_desc1')}}<br>{{__('help.contacts_desc2')}}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-envelope" style="color: #d58041"></i>
                            <h3 style="color: #0f5645">{{__('help.email_title')}}</h3>
                            <p style="color: #d58041">{{__('help.email_desc1')}}<br>{{__('help.email_desc2')}}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-clock" style="color: #d58041"></i>
                            <h3 style="color: #0f5645">{{__('help.work_title')}}</h3>
                            <p style="color: #d58041">{{__('help.work_desc')}}</p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-6">
                <form  action="{{ route('help.requests') }}" method="post">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-md-6">
                                <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" placeholder="{{__('help.placeholder1')}}" required>
                            @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 ">
                            <input type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone" placeholder="{{__('help.placeholder2')}}" required>
                            @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control  @error('title') is-invalid @enderror" name="title" placeholder="{{__('help.placeholder3')}}" required>
                            @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control  @error('description') is-invalid @enderror" name="description" rows="6" placeholder="{{__('help.placeholder4')}}" required></textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12 text-center">
                            <button class="btn btn-primary" style="background-color:#d58041" type="submit">{{__('help.submit')}}</button>
                        </div>

                    </div>
                </form>

            </div>

        </div>

    </div>

</section><!-- End Contact Section -->


</div>
@endsection

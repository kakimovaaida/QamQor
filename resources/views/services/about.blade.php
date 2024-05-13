@extends('layouts.app')
@section('content')

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">

                <p style="color: #0f5645">{{__('about.title1')}}</p>
            </header>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="box" >
                        <img src="assets/img/hand.png" width="400" height="300" alt="">
                        <h3 style="color: #0f5645">{{__('about.banner1')}}</h3>
                        <p> {{__('about.underbanner1')}}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <img src="assets/img/птица.png" width="400" height="300" alt="">
                        <h3 style="color: #0f5645">{{__('about.banner2')}}</h3>
                        <p> {{__('about.underbanner2')}}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="box">
                        <img src="assets/img/qampor.png"  width="400" height="300" alt="">
                        <h3 style="color: #0f5645">{{__('about.banner3')}}</h3>
                        <p>{{__('about.underbanner3')}}</p>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Values Section -->
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p style="color: #0f5645">{{__('about.title2')}}</p>
            </header>

            <div class="row">

                <div class="col-lg-6">
                    <img src="assets/img/5.jpg" width="600" height="500" alt="">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3 style="color: #0f5645">{{__('about.feature1')}}</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3 style="color: #0f5645">{{__('about.feature2')}}</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3 style="color: #0f5645">{{__('about.feature3')}}</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3 style="color: #0f5645">{{__('about.feature4')}} </h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check" ></i>
                                <h3 style="color: #0f5645">{{__('about.feature5')}}</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3 style="color: #0f5645">{{__('about.feature6')}}</h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- / row -->
            <section id="team" class="team">

                <div class="container" data-aos="fade-up">

                    <header class="section-header">
                        <p style="color: #d58041">{{__('about.title3')}}</p>
                    </header>

                    <div class="row gy-4">

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <div class="member-img">
                                    <img src="assets/img/team/nadira.jpg" width="225" height="300" alt="">
                                    <div class="social">

                                        <a href="https://instagram.com/_pnqueen_"><i class="bi bi-instagram"></i></a>

                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4 style="color: #0f5645">Надырханова Надира Нурлановна
                                    </h4>
                                    <p>Зло не рождается в темных переулках, оно рождается из отчаянья в каждом доме</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                            <div class="member">
                                <div class="member-img">
                                    <img src="assets/img/team/aida.jpg" width="225" height="300" alt="">
                                    <div class="social">
                                        <a href="https://www.instagram.com/aiiidda1"><i class="bi bi-instagram"></i></a>

                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4 style="color: #0f5645">Какимова Аида Манатовна</h4>
                                    <p>За каждой трудностью наступает облегчение</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                            <div class="member">
                                <div class="member-img">
                                    <img src="assets/img/team/aru.jpg" width="225" height="300"  alt="">
                                    <div class="social">
                                        <a href="https://www.instagram.com/__zhenisovna__"><i class="bi bi-instagram"></i></a>

                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4 style="color: #0f5645">Қалиасқарова Аружан Жеңісқызы</h4>
                                    <p>«Адам адамға - оттегі»</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                            <div class="member">
                                <div class="member-img">
                                    <img src="assets/img/team/sagi.jpg" width="225" height="300" alt="">
                                    <div class="social">
                                        <a href="https://www.instagram.com/soniritto_"><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4 style="color: #0f5645">Токсаба Сагина Алимжанқызы</h4>
                                    <p>Мейірімге толы тасқын бол🤍</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section><!-- End Team Section -->
@endsection


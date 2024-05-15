@extends('layouts.app')
@section('content')
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Poppins;
        }
        .card1{

            width: 600px;
            height: 500px;
            background: #fff;
            box-shadow: 15px 15px 60px rgba(0, 0, 0, .15);
            padding: 20px;
            margin:auto;
        }
        .card-img{
            width: 300px;
            height: 200px;
        }
        .card1 .top{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card1 .top .userDeatils{
            display: flex;
            align-items: center;
        }
        .card1 .top .userDeatils .profileImg{
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 8px;
            overflow: hidden;
        }
        .cover{
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            cursor: pointer;
        }
        .card1 .top .userDeatils h3{
            font-size: 18px;
            color: #4d4d4f;
            font-weight: 700;
            line-height: 1rem;
            cursor: pointer;
        }
        .card1 .top .userDeatils span{
            font-size: 0.75em;
        }
        .card1 .top .dot{
            transform: scale(0.6);
            cursor: pointer;
        }
        .imgBg{
            position:relative;
            width: 100%;
            height: 500px;
            margin: 10px 0 15px;
        }
        .btns{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btns img{
            max-width: 24px;
            cursor: pointer;
        }
        .btns .left img{
            margin-right: 8px;
        }
        .likes{
            margin-top: 5px;
            font-size: 1em;
            color: #4d4d4f;
        }
        .message{
            font-weight: 400;
            margin-top: 5px;
            color: #777;
            line-height: 1.5em;
        }
        .message b{
            color: #262626;
        }
        .message span{
            color: #1d92ff;
            cursor: pointer;
        }
        .comments{
            margin-top: 10px;
            align-items: center;
            color: #999;
        }
        .addComments{
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .addComments .userImg{
            position: relative;
            min-width: 30px;
            height: 30px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 8px;
        }
        .addComments .text{
            width: 100%;
            border: none;
            outline: none;
            font-weight: 400;
            font-size: 18px;
            color: #262626;
        }
        .addComments .text::placeholder{
            color: #777;
        }
        .postTime{
            margin-top: 10px;
            font-weight: 500;
            color: #777;
        }
        .col{
            margin-top: 10px;
        }
    </style>
    <div class="container">
        <!-- ======= Values Section ======= -->
        <section id="/Help" class="values">

            <div class="container" data-aos="fade-up">
                <div class="row">
                    @foreach($types as $index => $type)
                        @if($type->type_cat_id == 1)
                            @if($loop->last && $loop->iteration >= $loop->count - 1)
                                <header class="section-header" style="margin-bottom: 80px">
                                    <p>Заңгерлік көмек</p>
                                </header>
                                @foreach($types as $ty)
                                    <div class="col-lg-4" style="margin-top: -60px; margin-bottom: 60px" data-aos="fade-up" data-aos-delay="200">
                                        <div class="box" style="background-color: #0f5645;">
                                            <a href="{{route('services.type',$ty->id)}}" style="text-decoration: none"><h3>{{$ty->name}}</h3></a><br>
                                        </div>
                                    </div>
                                @endforeach
                                    <div class="row">
                                        <header class="section-header">
                                            <p>Осы сала бойынша көмек беруші:</p>
                                        </header>
                                        <div class="col" >
                                            <div class="card1">
                                                <div class="contact-box center-version">
                                                    <a>
                                                        <h3 class="m-b-xs"><strong>МЕРУЕРТ САМАТОВНА
                                                            </strong></h3>
                                                        <img src="{{asset('assets/img/lawyer/Meruu.jpeg')}}" alt="sdsd"  style="">

                                                        <div class="font-bold"><strong>Бағыты:</strong>Еңбек даулары, шарттық мәселелер, сомаларды өндіріп алу, отбасылық даулар, мәмілелер</div>
                                                        <div class="font-bold"><strong>Жұмыс тәжірибесі:</strong>18 жыл</div>
                                                        <address class="m-t-md">
                                                            <strong>Instagram: </strong>mika_kms<br>
                                                            <abbr title="Phone">Тел.номер:</abbr> 8 775 393 79 99
                                                        </address>
                                                    </a>
                                                    <div class="contact-box-footer">
                                                        <div class="m-t-xs btn-group">
                                                            <a href="tel:87075723696" class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                            <a href="https://gmail.com" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" >
                                            <div class="card1">
                                                <div class="contact-box center-version">
                                                    <a>
                                                        <h3 class="m-b-xs"><strong>ДИЯРА ЗАКИРОВА
                                                            </strong></h3>
                                                        <img src="{{asset('assets/img/lawyer/dariya.jpeg')}}" alt="sdsd"  style="">

                                                        <div class="font-bold"><strong>Бағыты:</strong>Еңбек даулары, шарттық мәселелер, сомаларды өндіріп алу, отбасылық және мұрагерлік құқық</div>
                                                        <div class="font-bold"><strong>Жұмыс тәжірибесі:</strong>8 жыл</div>
                                                        <address class="m-t-md">
                                                            <strong>Instagram: </strong>diyara_zakirova <br>
                                                            <abbr title="Phone">Тел.номер:</abbr> 8 778 266 06 56
                                                        </address>
                                                    </a>
                                                    <div class="contact-box-footer">
                                                        <div class="m-t-xs btn-group">
                                                            <a href="tel:87075723696" class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                            <a href="https://gmail.com" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" >
                                            <div class="card1">
                                                <div class="contact-box center-version">
                                                    <a>
                                                        <h3 class="m-b-xs"><strong>Бекжанов Алмаз
                                                            </strong></h3>
                                                        <img src="{{asset('assets/img/lawyer/almas.jpeg')}}" alt="sdsd"  style="">

                                                        <div class="font-bold"><strong>Бағыты:</strong>Білікті заңгер қызметтері</div>
                                                        <div class="font-bold"><strong>Жұмыс тәжірибесі:</strong>16 жыл</div>
                                                        <address class="m-t-md">
                                                            Алматы, Бухар Жырау 64<br>
                                                            <strong>Instagram</strong>:</strong> almas.bekzhanovLaw<br>
                                                            <abbr title="Phone">Тел.номер:</abbr> 8 701 610 02 16
                                                        </address>
                                                    </a>
                                                    <div class="contact-box-footer">
                                                        <div class="m-t-xs btn-group">
                                                            <a href="tel:87075723696" class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                            <a href="https://gmail.com" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" >
                                            <div class="card1">
                                                <div class="contact-box center-version">
                                                    <a>
                                                        <h3 class="m-b-xs"><strong>TN Union Partners
                                                            </strong></h3>
                                                        <img src="{{asset('assets/img/lawyer/fig.jpeg')}}" alt="sdsd"  style="">

                                                        <div class="font-bold"><strong>Бағыты:</strong>Заң қызметтері, Сотта істерді жүргізу, Көші-қон қызметі</div>
                                                        <div class="font-bold"><strong>Жұмыс тәжірибесі:</strong>16 жыл</div>
                                                        <address class="m-t-md">
                                                            <strong>Instagram:</strong>tnunionpartners<br>

                                                            <abbr title="Phone">Тел.номер:</abbr> 8 778 597 73 02 <br>
                                                            <abbr title="Phone">Тел.номер:</abbr> 8 707 818 18 44
                                                        </address>
                                                    </a>
                                                    <div class="contact-box-footer">
                                                        <div class="m-t-xs btn-group">
                                                            <a href="tel:87075723696" class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                            <a href="https://gmail.com" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" >
                                            <div class="card1">
                                                <div class="contact-box center-version">
                                                    <a>
                                                        <h3 class="m-b-xs"><strong>Макыжанов Канат
                                                            </strong></h3>
                                                        <img src="{{asset('assets/img/lawyer/kana.jpeg')}}" alt="sdsd"  style="">

                                                        <div class="font-bold"><strong>Бағыты:</strong>Қылмыстық және азаматтық құқық саласындағы білікті заңгер қызметтері</div>
                                                        <div class="font-bold"><strong>Жұмыс тәжірибесі:</strong>5 жыл</div>
                                                        <address class="m-t-md">
                                                            <strong>Instagram:</strong>kanatadvokat<br>

                                                            <abbr title="Phone">Тел.номер:</abbr> 8 700 292 95 73 <br>
                                                        </address>
                                                    </a>
                                                    <div class="contact-box-footer">
                                                        <div class="m-t-xs btn-group">
                                                            <a href="tel:87075723696" class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                            <a href="https://gmail.com" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" >
                                            <div class="card1">
                                                <div class="contact-box center-version">
                                                    <a>
                                                        <h3 class="m-b-xs"><strong>Тлебалиева Гулнар
                                                            </strong></h3>
                                                        <img src="{{asset('assets/img/lawyer/guliya.jpeg')}}" alt="sdsd"  style="">

                                                        <div class="font-bold"><strong>Бағыты:</strong>заң қызметтері мен медиаторлық қызметтердің барлық түрлері;</div>
                                                        <div class="font-bold"><strong>Жұмыс тәжірибесі:</strong>5 жыл</div>
                                                        <address class="m-t-md">
                                                            <strong>Instagram:</strong> gulnarazhaiyk<br>

                                                            <abbr title="Phone">Тел.номер:</abbr> 8 701 100 83 88 <br>
                                                        </address>
                                                    </a>
                                                    <div class="contact-box-footer">
                                                        <div class="m-t-xs btn-group">
                                                            <a href="tel:87075723696" class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                            <a href="https://gmail.com" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" >
                                            <div class="card1">
                                                <div class="contact-box center-version">
                                                    <a>
                                                        <h3 class="m-b-xs"><strong>Асмитуллаева Динара
                                                            </strong></h3>
                                                        <img src="{{asset('assets/img/lawyer/Dinara.jpeg')}}" alt="sdsd"  style="">

                                                        <div class="font-bold"><strong>Бағыты:</strong>Отбасы және мұрагерлік құқық, корпоративтік құқық, кәмелетке толмаған балалармен даулар (неке бұзу).</div>
                                                        <div class="font-bold"><strong>Жұмыс тәжірибесі:</strong>20 жыл</div>
                                                        <address class="m-t-md">
                                                            <strong>Instagram:</strong>zangid.kz<br>

                                                            <abbr title="Phone">Тел.номер:</abbr> 8 707 322 55 05 <br>
                                                        </address>
                                                    </a>
                                                    <div class="contact-box-footer">
                                                        <div class="m-t-xs btn-group">
                                                            <a href="tel:87075723696" class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                            <a href="https://gmail.com" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" >
                                            <div class="card1">
                                                <div class="contact-box center-version">
                                                    <a>
                                                        <h3 class="m-b-xs"><strong>Шыныбаев Маргулан
                                                            </strong></h3>
                                                        <img src="{{asset('assets/img/lawyer/fig.jpeg')}}" alt="sdsd"  style="">

                                                        <div class="font-bold"><strong>Бағыты:</strong>Заң қызметтері, Сотта істерді жүргізу, Көші-қон қызметі</div>
                                                        <div class="font-bold"><strong>Жұмыс тәжірибесі:</strong>16 жыл</div>
                                                        <address class="m-t-md">
                                                            <strong>Instagram:</strong>tnunionpartners<br>

                                                            <abbr title="Phone">Тел.номер:</abbr> 8 778 597 73 02 <br>
                                                            <abbr title="Phone">Тел.номер:</abbr> 8 707 818 18 44
                                                        </address>
                                                    </a>
                                                    <div class="contact-box-footer">
                                                        <div class="m-t-xs btn-group">
                                                            <a href="tel:87075723696" class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                            <a href="https://gmail.com" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" >
                                            <div class="card1">
                                                <div class="contact-box center-version">
                                                    <a>
                                                        <h3 class="m-b-xs"><strong>TN Union Partners
                                                            </strong></h3>
                                                        <img src="{{asset('assets/img/lawyer/fig.jpeg')}}" alt="sdsd"  style="">

                                                        <div class="font-bold"><strong>Бағыты:</strong>Заң қызметтері, Сотта істерді жүргізу, Көші-қон қызметі</div>
                                                        <div class="font-bold"><strong>Жұмыс тәжірибесі:</strong>16 жыл</div>
                                                        <address class="m-t-md">
                                                            <strong>Instagram:</strong>tnunionpartners<br>

                                                            <abbr title="Phone">Тел.номер:</abbr> 8 778 597 73 02 <br>
                                                            <abbr title="Phone">Тел.номер:</abbr> 8 707 818 18 44
                                                        </address>
                                                    </a>
                                                    <div class="contact-box-footer">
                                                        <div class="m-t-xs btn-group">
                                                            <a href="tel:87075723696" class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                            <a href="https://gmail.com" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" >
                                            <div class="card1">
                                                <div class="contact-box center-version">
                                                    <a>
                                                        <h3 class="m-b-xs"><strong>TN Union Partners
                                                            </strong></h3>
                                                        <img src="{{asset('assets/img/lawyer/fig.jpeg')}}" alt="sdsd"  style="">

                                                        <div class="font-bold"><strong>Бағыты:</strong>Заң қызметтері, Сотта істерді жүргізу, Көші-қон қызметі</div>
                                                        <div class="font-bold"><strong>Жұмыс тәжірибесі:</strong>16 жыл</div>
                                                        <address class="m-t-md">
                                                            <strong>Instagram:</strong>tnunionpartners<br>

                                                            <abbr title="Phone">Тел.номер:</abbr> 8 778 597 73 02 <br>
                                                            <abbr title="Phone">Тел.номер:</abbr> 8 707 818 18 44
                                                        </address>
                                                    </a>
                                                    <div class="contact-box-footer">
                                                        <div class="m-t-xs btn-group">
                                                            <a href="tel:87075723696" class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                            <a href="https://gmail.com" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            @endif
                        @endif
                        @if($type->type_cat_id == 3)
                                @if($loop->last && $loop->iteration >= $loop->count - 1)
                                    <header class="section-header">
                                        <p>Қайырымдылық көмек</p>
                                    </header>
                                    <div class="row">
                                        <header class="section-header" style="margin-top: 50px">
                                            <h3>Балаларға</h3>
                                        </header>
                                        @foreach($kids as $k)
                                            <div class="col-3">
                                                <div class="card" style="height: 150px">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{$k->name}}</h5>
                                                        </div>
                                                    <div class="card-footer">
                                                        <a href="{{route('services.type',$k->id)}}" class="btn btn-primary">Толығырақ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="row">
                                        <header class="section-header" style="margin-top: 50px">
                                            <h3>Білім үшін</h3>
                                        </header>
                                        @foreach($study as $st)
                                            <div class="col-3">
                                                <div class="card" style="height: 150px">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{$st->name}}</h5>
                                                    </div>
                                                    <div class="card-footer">
                                                        <a href="{{route('services.type',$st->id)}}" class="btn btn-primary">Толығырақ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div><br>
                                    <div class="row">
                                        <header class="section-header" style="margin-top: 50px">
                                            <h3>Медицина Саласы</h3>
                                        </header>
                                        @foreach($medicine as $med)
                                            <div class="col-3">
                                                <div class="card" style="height: 150px">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{$med->name}}</h5>
                                                        <div class="card-footer">
                                                            <a href="{{route('services.type',$med->id)}}" class="btn btn-primary">Толығырақ</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                @endif
                            @endif
                            @if($type->type_cat_id == 2)

                                @if($loop->last && $loop->iteration >= $loop->count - 1)

                                    <div class="row">
                                        @foreach($types as $t)
                                            <div class="col-lg-4" style="margin-top: 20px" data-aos="fade-up" data-aos-delay="200">
                                                <div class="box" style="border-radius: 100px;background-color: #0f5645">
                                                    <a href="{{route('services.type',$t->id)}}" style="text-decoration: none"><h3>{{$t->name}}</h3></a><br>
                                                </div>
                                            </div>
                                        @endforeach
                                     </div>

                                <hr> <br><br><br><br><br>

                                <div class="container">
                                    <div class="card1">
                                        <div class="top">
                                            <div class="userDeatils">
                                                <div class="profileImg">
                                                    <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                                </div>
                                                <a href="https://www.instagram.com/p/Ce1U0wXNUUJ/"><h3>my_ryadom<br> <span>816 подписчики</span></h3></a>
                                            </div>
                                            <div class="dot">
                                                <img src="/assets/img/insta/dot.png" alt="dot">
                                            </div>
                                        </div>
                                        <div class="imgBg">
                                            <img src="/assets/img/insta/AAAA.png" alt="bg" class="cover">
                                        </div>
                                        <div class="btns">
                                            <div class="left">
                                                <img src="/assets/img/insta/heart.png" alt="heart" class="heart" onclick="likeButton()">
                                                <img src="/assets/img/insta/comment.png" alt="comment">
                                                <img src="/assets/img/insta/share.png" alt="share">
                                            </div>
                                            <div class="right">
                                                <img src="/assets/img/insta/bookmark.png" alt="bookmark">
                                            </div>
                                        </div>
                                        <h4 class="likes">5,489 likes</h4>
                                        <h4 class="message">
                                            <b>my_ryadom</b>
                                        </h4>
                                        <h4 class="comments">View all 546 comments</h4>
                                        <div class="addComments">
                                            <div class="userImg">
                                                <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                            </div>
                                            <input type="text" class="text" placeholder="Add a comment...">
                                        </div>
                                        <h5 class="postTime">5 hours ago</h5>
                                    </div>
                                 <br>
                                <div class="card1">
                                    <div class="top">
                                        <div class="userDeatils">
                                            <div class="profileImg">
                                                <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                            </div>
                                            <a href="https://www.instagram.com/p/Ce1U0wXNUUJ/"><h3>my_ryadom<br> <span>816 подписчики</span></h3></a>
                                        </div>
                                        <div class="dot">
                                            <img src="/assets/img/insta/dot.png" alt="dot">
                                        </div>
                                    </div>
                                    <div class="imgBg">
                                        <img src="/assets/img/insta/AAAA.png" alt="bg" class="cover">
                                    </div>
                                    <div class="btns">
                                        <div class="left">
                                            <img src="/assets/img/insta/heart.png" alt="heart" class="heart" onclick="likeButton()">
                                            <img src="/assets/img/insta/comment.png" alt="comment">
                                            <img src="/assets/img/insta/share.png" alt="share">
                                        </div>
                                        <div class="right">
                                            <img src="/assets/img/insta/bookmark.png" alt="bookmark">
                                        </div>
                                    </div>
                                    <h4 class="likes">5,489 likes</h4>
                                    <h4 class="message">
                                        <b>my_ryadom</b>
                                    </h4>
                                    <h4 class="comments">View all 546 comments</h4>
                                    <div class="addComments">
                                        <div class="userImg">
                                            <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                        </div>
                                        <input type="text" class="text" placeholder="Add a comment...">
                                    </div>
                                    <h5 class="postTime">5 hours ago</h5>
                                </div>
                                    <div class="card1">
                                        <div class="top">
                                            <div class="userDeatils">
                                                <div class="profileImg">
                                                    <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                                </div>
                                                <a href="https://www.instagram.com/p/Ce1U0wXNUUJ/"><h3>my_ryadom<br> <span>816 подписчики</span></h3></a>
                                            </div>
                                            <div class="dot">
                                                <img src="/assets/img/insta/dot.png" alt="dot">
                                            </div>
                                        </div>
                                        <div class="imgBg">
                                            <img src="/assets/img/insta/AAAA.png" alt="bg" class="cover">
                                        </div>
                                        <div class="btns">
                                            <div class="left">
                                                <img src="/assets/img/insta/heart.png" alt="heart" class="heart" onclick="likeButton()">
                                                <img src="/assets/img/insta/comment.png" alt="comment">
                                                <img src="/assets/img/insta/share.png" alt="share">
                                            </div>
                                            <div class="right">
                                                <img src="/assets/img/insta/bookmark.png" alt="bookmark">
                                            </div>
                                        </div>
                                        <h4 class="likes">5,489 likes</h4>
                                        <h4 class="message">
                                            <b>my_ryadom</b>
                                        </h4>
                                        <h4 class="comments">View all 546 comments</h4>
                                        <div class="addComments">
                                            <div class="userImg">
                                                <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                            </div>
                                            <input type="text" class="text" placeholder="Add a comment...">
                                        </div>
                                        <h5 class="postTime">5 hours ago</h5>
                                    </div>
                                    <div class="card1">
                                        <div class="top">
                                            <div class="userDeatils">
                                                <div class="profileImg">
                                                    <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                                </div>
                                                <a href="https://www.instagram.com/p/Ce1U0wXNUUJ/"><h3>my_ryadom<br> <span>816 подписчики</span></h3></a>
                                            </div>
                                            <div class="dot">
                                                <img src="/assets/img/insta/dot.png" alt="dot">
                                            </div>
                                        </div>
                                        <div class="imgBg">
                                            <img src="/assets/img/insta/AAAA.png" alt="bg" class="cover">
                                        </div>
                                        <div class="btns">
                                            <div class="left">
                                                <img src="/assets/img/insta/heart.png" alt="heart" class="heart" onclick="likeButton()">
                                                <img src="/assets/img/insta/comment.png" alt="comment">
                                                <img src="/assets/img/insta/share.png" alt="share">
                                            </div>
                                            <div class="right">
                                                <img src="/assets/img/insta/bookmark.png" alt="bookmark">
                                            </div>
                                        </div>
                                        <h4 class="likes">5,489 likes</h4>
                                        <h4 class="message">
                                            <b>my_ryadom</b>
                                        </h4>
                                        <h4 class="comments">View all 546 comments</h4>
                                        <div class="addComments">
                                            <div class="userImg">
                                                <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                            </div>
                                            <input type="text" class="text" placeholder="Add a comment...">
                                        </div>
                                        <h5 class="postTime">5 hours ago</h5>
                                    </div>
                                    <div class="card1">
                                        <div class="top">
                                            <div class="userDeatils">
                                                <div class="profileImg">
                                                    <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                                </div>
                                                <a href="https://www.instagram.com/p/Ce1U0wXNUUJ/"><h3>my_ryadom<br> <span>816 подписчики</span></h3></a>
                                            </div>
                                            <div class="dot">
                                                <img src="/assets/img/insta/dot.png" alt="dot">
                                            </div>
                                        </div>
                                        <div class="imgBg">
                                            <img src="/assets/img/insta/AAAA.png" alt="bg" class="cover">
                                        </div>
                                        <div class="btns">
                                            <div class="left">
                                                <img src="/assets/img/insta/heart.png" alt="heart" class="heart" onclick="likeButton()">
                                                <img src="/assets/img/insta/comment.png" alt="comment">
                                                <img src="/assets/img/insta/share.png" alt="share">
                                            </div>
                                            <div class="right">
                                                <img src="/assets/img/insta/bookmark.png" alt="bookmark">
                                            </div>
                                        </div>
                                        <h4 class="likes">5,489 likes</h4>
                                        <h4 class="message">
                                            <b>my_ryadom</b>
                                        </h4>
                                        <h4 class="comments">View all 546 comments</h4>
                                        <div class="addComments">
                                            <div class="userImg">
                                                <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                            </div>
                                            <input type="text" class="text" placeholder="Add a comment...">
                                        </div>
                                        <h5 class="postTime">5 hours ago</h5>
                                    </div>
                                    <div class="card1">
                                        <div class="top">
                                            <div class="userDeatils">
                                                <div class="profileImg">
                                                    <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                                </div>
                                                <a href="https://www.instagram.com/p/Ce1U0wXNUUJ/"><h3>my_ryadom<br> <span>816 подписчики</span></h3></a>
                                            </div>
                                            <div class="dot">
                                                <img src="/assets/img/insta/dot.png" alt="dot">
                                            </div>
                                        </div>
                                        <div class="imgBg">
                                            <img src="/assets/img/insta/AAAA.png" alt="bg" class="cover">
                                        </div>
                                        <div class="btns">
                                            <div class="left">
                                                <img src="/assets/img/insta/heart.png" alt="heart" class="heart" onclick="likeButton()">
                                                <img src="/assets/img/insta/comment.png" alt="comment">
                                                <img src="/assets/img/insta/share.png" alt="share">
                                            </div>
                                            <div class="right">
                                                <img src="/assets/img/insta/bookmark.png" alt="bookmark">
                                            </div>
                                        </div>
                                        <h4 class="likes">5,489 likes</h4>
                                        <h4 class="message">
                                            <b>my_ryadom</b>
                                        </h4>
                                        <h4 class="comments">View all 546 comments</h4>
                                        <div class="addComments">
                                            <div class="userImg">
                                                <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                            </div>
                                            <input type="text" class="text" placeholder="Add a comment...">
                                        </div>
                                        <h5 class="postTime">5 hours ago</h5>
                                    </div>
                                    <div class="card1">
                                        <div class="top">
                                            <div class="userDeatils">
                                                <div class="profileImg">
                                                    <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                                </div>
                                                <a href="https://www.instagram.com/p/Ce1U0wXNUUJ/"><h3>my_ryadom<br> <span>816 подписчики</span></h3></a>
                                            </div>
                                            <div class="dot">
                                                <img src="/assets/img/insta/dot.png" alt="dot">
                                            </div>
                                        </div>
                                        <div class="imgBg">
                                            <img src="/assets/img/insta/AAAA.png" alt="bg" class="cover">
                                        </div>
                                        <div class="btns">
                                            <div class="left">
                                                <img src="/assets/img/insta/heart.png" alt="heart" class="heart" onclick="likeButton()">
                                                <img src="/assets/img/insta/comment.png" alt="comment">
                                                <img src="/assets/img/insta/share.png" alt="share">
                                            </div>
                                            <div class="right">
                                                <img src="/assets/img/insta/bookmark.png" alt="bookmark">
                                            </div>
                                        </div>
                                        <h4 class="likes">5,489 likes</h4>
                                        <h4 class="message">
                                            <b>my_ryadom</b>
                                        </h4>
                                        <h4 class="comments">View all 546 comments</h4>
                                        <div class="addComments">
                                            <div class="userImg">
                                                <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                            </div>
                                            <input type="text" class="text" placeholder="Add a comment...">
                                        </div>
                                        <h5 class="postTime">5 hours ago</h5>
                                    </div>
                                    <div class="card1">
                                        <div class="top">
                                            <div class="userDeatils">
                                                <div class="profileImg">
                                                    <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                                </div>
                                                <a href="https://www.instagram.com/p/Ce1U0wXNUUJ/"><h3>my_ryadom<br> <span>816 подписчики</span></h3></a>
                                            </div>
                                            <div class="dot">
                                                <img src="/assets/img/insta/dot.png" alt="dot">
                                            </div>
                                        </div>
                                        <div class="imgBg">
                                            <img src="/assets/img/insta/AAAA.png" alt="bg" class="cover">
                                        </div>
                                        <div class="btns">
                                            <div class="left">
                                                <img src="/assets/img/insta/heart.png" alt="heart" class="heart" onclick="likeButton()">
                                                <img src="/assets/img/insta/comment.png" alt="comment">
                                                <img src="/assets/img/insta/share.png" alt="share">
                                            </div>
                                            <div class="right">
                                                <img src="/assets/img/insta/bookmark.png" alt="bookmark">
                                            </div>
                                        </div>
                                        <h4 class="likes">5,489 likes</h4>
                                        <h4 class="message">
                                            <b>my_ryadom</b>
                                        </h4>
                                        <h4 class="comments">View all 546 comments</h4>
                                        <div class="addComments">
                                            <div class="userImg">
                                                <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                            </div>
                                            <input type="text" class="text" placeholder="Add a comment...">
                                        </div>
                                        <h5 class="postTime">5 hours ago</h5>
                                    </div>
                                    <div class="card1">
                                        <div class="top">
                                            <div class="userDeatils">
                                                <div class="profileImg">
                                                    <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                                </div>
                                                <a href="https://www.instagram.com/p/Ce1U0wXNUUJ/"><h3>my_ryadom<br> <span>816 подписчики</span></h3></a>
                                            </div>
                                            <div class="dot">
                                                <img src="/assets/img/insta/dot.png" alt="dot">
                                            </div>
                                        </div>
                                        <div class="imgBg">
                                            <img src="/assets/img/insta/AAAA.png" alt="bg" class="cover">
                                        </div>
                                        <div class="btns">
                                            <div class="left">
                                                <img src="/assets/img/insta/heart.png" alt="heart" class="heart" onclick="likeButton()">
                                                <img src="/assets/img/insta/comment.png" alt="comment">
                                                <img src="/assets/img/insta/share.png" alt="share">
                                            </div>
                                            <div class="right">
                                                <img src="/assets/img/insta/bookmark.png" alt="bookmark">
                                            </div>
                                        </div>
                                        <h4 class="likes">5,489 likes</h4>
                                        <h4 class="message">
                                            <b>my_ryadom</b>
                                        </h4>
                                        <h4 class="comments">View all 546 comments</h4>
                                        <div class="addComments">
                                            <div class="userImg">
                                                <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                            </div>
                                            <input type="text" class="text" placeholder="Add a comment...">
                                        </div>
                                        <h5 class="postTime">5 hours ago</h5>
                                    </div>
                                    <div class="card1">
                                        <div class="top">
                                            <div class="userDeatils">
                                                <div class="profileImg">
                                                    <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                                </div>
                                                <a href="https://www.instagram.com/p/Ce1U0wXNUUJ/"><h3>my_ryadom<br> <span>816 подписчики</span></h3></a>
                                            </div>
                                            <div class="dot">
                                                <img src="/assets/img/insta/dot.png" alt="dot">
                                            </div>
                                        </div>
                                        <div class="imgBg">
                                            <img src="/assets/img/insta/AAAA.png" alt="bg" class="cover">
                                        </div>
                                        <div class="btns">
                                            <div class="left">
                                                <img src="/assets/img/insta/heart.png" alt="heart" class="heart" onclick="likeButton()">
                                                <img src="/assets/img/insta/comment.png" alt="comment">
                                                <img src="/assets/img/insta/share.png" alt="share">
                                            </div>
                                            <div class="right">
                                                <img src="/assets/img/insta/bookmark.png" alt="bookmark">
                                            </div>
                                        </div>
                                        <h4 class="likes">5,489 likes</h4>
                                        <h4 class="message">
                                            <b>my_ryadom</b>
                                        </h4>
                                        <h4 class="comments">View all 546 comments</h4>
                                        <div class="addComments">
                                            <div class="userImg">
                                                <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                            </div>
                                            <input type="text" class="text" placeholder="Add a comment...">
                                        </div>
                                        <h5 class="postTime">5 hours ago</h5>
                                    </div>
                                    <div class="card1">
                                        <div class="top">
                                            <div class="userDeatils">
                                                <div class="profileImg">
                                                    <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                                </div>
                                                <a href="https://www.instagram.com/p/Ce1U0wXNUUJ/"><h3>my_ryadom<br> <span>816 подписчики</span></h3></a>
                                            </div>
                                            <div class="dot">
                                                <img src="/assets/img/insta/dot.png" alt="dot">
                                            </div>
                                        </div>
                                        <div class="imgBg">
                                            <img src="/assets/img/insta/AAAA.png" alt="bg" class="cover">
                                        </div>
                                        <div class="btns">
                                            <div class="left">
                                                <img src="/assets/img/insta/heart.png" alt="heart" class="heart" onclick="likeButton()">
                                                <img src="/assets/img/insta/comment.png" alt="comment">
                                                <img src="/assets/img/insta/share.png" alt="share">
                                            </div>
                                            <div class="right">
                                                <img src="/assets/img/insta/bookmark.png" alt="bookmark">
                                            </div>
                                        </div>
                                        <h4 class="likes">5,489 likes</h4>
                                        <h4 class="message">
                                            <b>my_ryadom</b>
                                        </h4>
                                        <h4 class="comments">View all 546 comments</h4>
                                        <div class="addComments">
                                            <div class="userImg">
                                                <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                            </div>
                                            <input type="text" class="text" placeholder="Add a comment...">
                                        </div>
                                        <h5 class="postTime">5 hours ago</h5>
                                    </div>
                                    <div class="card1">
                                        <div class="top">
                                            <div class="userDeatils">
                                                <div class="profileImg">
                                                    <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                                </div>
                                                <a href="https://www.instagram.com/p/Ce1U0wXNUUJ/"><h3>my_ryadom<br> <span>816 подписчики</span></h3></a>
                                            </div>
                                            <div class="dot">
                                                <img src="/assets/img/insta/dot.png" alt="dot">
                                            </div>
                                        </div>
                                        <div class="imgBg">
                                            <img src="/assets/img/insta/AAAA.png" alt="bg" class="cover">
                                        </div>
                                        <div class="btns">
                                            <div class="left">
                                                <img src="/assets/img/insta/heart.png" alt="heart" class="heart" onclick="likeButton()">
                                                <img src="/assets/img/insta/comment.png" alt="comment">
                                                <img src="/assets/img/insta/share.png" alt="share">
                                            </div>
                                            <div class="right">
                                                <img src="/assets/img/insta/bookmark.png" alt="bookmark">
                                            </div>
                                        </div>
                                        <h4 class="likes">5,489 likes</h4>
                                        <h4 class="message">
                                            <b>my_ryadom</b>
                                        </h4>
                                        <h4 class="comments">View all 546 comments</h4>
                                        <div class="addComments">
                                            <div class="userImg">
                                                <img src="/assets/img/insta/User.jpg" alt="user" class="cover">
                                            </div>
                                            <input type="text" class="text" placeholder="Add a comment...">
                                        </div>
                                        <h5 class="postTime">5 hours ago</h5>
                                    </div>
                            </div>
                                    @endif
                                @endif
                    @endforeach

                </div>
            </div>

        </section>
        <script>
            function likeButton(){
                let heart = document.querySelector('.heart');
                let likes = document.querySelector('.likes');
                if(heart.src.match("/assets/img/insta/heart.png")){
                    heart.src = "/assets/img/insta/heart_red.png";
                    likes.innerHTML = "5,490 likes";
                } else {
                    heart.src = "/assets/img/insta/heart.png";
                    likes.innerHTML = "5,489 likes"
                }
            }
        </script>
@endsection


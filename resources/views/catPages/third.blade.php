@extends('layouts.app')
@section('content')
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Poppins;
        }
        .card{

            width: 600px;
            min-height: 900px;
            background: #fff;
            box-shadow: 15px 15px 60px rgba(0, 0, 0, .15);
            padding: 20px;
            margin:auto;
        }
        .card .top{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card .top .userDeatils{
            display: flex;
            align-items: center;
        }
        .card .top .userDeatils .profileImg{
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
        .card .top .userDeatils h3{
            font-size: 18px;
            color: #4d4d4f;
            font-weight: 700;
            line-height: 1rem;
            cursor: pointer;
        }
        .card .top .userDeatils span{
            font-size: 0.75em;
        }
        .card .top .dot{
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
    </style>
    <div class="container">
        <!-- ======= Values Section ======= -->
        <section id="/Help" class="values">

            <div class="container" data-aos="fade-up">
                <div class="row">
                    @foreach($types as $index => $type)
                        @if($type->type_cat_id != 2)
                            <div class="col-lg-4" style="margin-top: -60px" data-aos="fade-up" data-aos-delay="200">
                                <div class="box" style="border-radius: 40px;background-color: #0f5645">
                                    <a href="{{route('services.type',$type->id)}}" style="text-decoration: none"><h3>{{$type->name}}</h3></a><br>
                                </div>
                            </div>
                        @endif

                        @if($loop->last && $loop->iteration >= $loop->count - 1)
                            @if($type->type_cat_id == 3)
                                <div class="container" style="margin-top: 100px; height: 300px">
                                    <header class="section-header">
                                        <p>Осы сала бойынша көмек беруші:</p>
                                    </header>
                                        <div class="card" style="max-width: 500px;height: 300px; margin: auto">
                                            <div class="contact-box center-version">
                                                <a>
                                                    <h3 class="m-b-xs"><strong>{{ $type->helper->name }}</strong></h3>
                                                    <div class="font-bold"><strong>Жұмыс тәжірибесі:</strong> {{ $type->helper->experience }} жыл</div>
                                                    <address class="m-t-md">
                                                        <strong>Мекен-жай:</strong><br>
                                                        Университет Нархоз<br>
                                                        Алматы қаласы, Жандосова 55<br>
                                                        <abbr title="Phone">Тел.номер:</abbr> {{ $type->helper->phone }}
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
                                @endif
                            @endif


                            @if($type->type_cat_id == 1)
                                <div class="col-5" style="margin-left: 420px;">
                                    <h3 style="color: #13866e; font-weight: bold;font-size: 40px">Волонтерская помощь</h3><br>
                                </div>
                            @endif



                            @if($type->type_cat_id == 2)

                                <div class="col-5" style="margin-left: 420px;">
                                        <h3 style="color: #13866e; font-weight: bold;font-size: 40px">Волонтерская помощь</h3><br>
                                </div>
                                <hr> <br><br><br><br><br>
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
                                    <div class="card">
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
                                <div class="card">
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
                                    <div class="card">
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
                                    <div class="card">
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
                                    <div class="card">
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
                                    <div class="card">
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
                                    <div class="card">
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
                                    <div class="card">
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
                                    <div class="card">
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
                                    <div class="card">
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
                                    <div class="card">
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
                                    <div class="card">
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


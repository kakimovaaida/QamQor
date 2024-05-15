@extends('layouts.app')
@section('content')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap");
        @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css");
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1200px;
            margin-block: 2rem;
            gap: 2rem;
        }

        img {
            max-width: 100%;
            display: block;
            object-fit: cover;
        }

        .card {
            display: flex;
            flex-direction: column;
            width: clamp(20rem, calc(20rem + 2vw), 22rem);
            overflow: hidden;
            box-shadow: 0 .1rem 1rem rgba(0, 0, 0, 0.1);
            border-radius: 1em;
            background: #ECE9E6;
            background: linear-gradient(to right, #FFFFFF, #ECE9E6);

        }



        .card__body {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: .5rem;
        }


        .tag {
            align-self: flex-start;
            padding: .25em .75em;
            border-radius: 1em;
            font-size: .75rem;
        }

        .tag + .tag {
            margin-left: .5em;
        }

        .tag-blue {
            background: #139b48;
            background: linear-gradient(to bottom, #13866e, #139b48);
            color: #fafafa;
        }

        .tag-brown {
            background: #D1913C;
            background: linear-gradient(to bottom, #FFD194, #D1913C);
            color: #fafafa;
        }

        .tag-red {
            background: #cb2d3e;
            background: linear-gradient(to bottom, #ef473a, #cb2d3e);
            color: #fafafa;
        }

        .card__body h4 {
            font-size: 1.5rem;
            text-transform: capitalize;
        }

        .card__footer {
            display: flex;
            padding: 1rem;
            margin-top: auto;
        }

        .user {
            display: flex;
            gap: .5rem;
        }

        .user__image {
            border-radius: 50%;
            width: 70px;
            height: 70px;
            margin-top: -10px;
        }

        .user__info > small {
            color: #666;
        }
        /* Пример простой стилизации */
        .search-form input[type="text"] {
            padding: 8px;
            margin-right: 4px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-form button {
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-form button:hover {
            background-color: #0056b3;
        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center" style="color: #0f5645">
                <h1 data-aos="fade-up" style="font-family: 'Kurale', cursive; font-size: 50px;"><span class="Qtext">Q</span>amqor</h1>
                <br>
                <h2 data-aos="fade-up" style="color: #d58041" data-aos-delay="400">{{__('messages.banner')}}
                    <br> <p align="right">{{__('messages.banner_author')}}</p></h2>
                <div data-aos="fade-up" data-aos-delay="600">
                </div>
                <br><br><br>
                <form action="{{ route('search') }}" method="GET" class="search-form">
                    <input type="text" name="query" placeholder="{{__('messages.search_placeholder')}}" required>
                    <button type="submit">{{__('messages.search')}}</button>
                </form>
            </div>

            <div class="col-lg-6 hero-img"  data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('assets/img/baass.jpg')}}"  alt="" height="400" width="800">
            </div>
        </div>
    </div>
        <!-- ======= Values Section ======= -->

        <section id="/Help" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p style="color: #0f5645">{{__('messages.help_cats')}}</p>
                </header>

                <div class="row">
                    @foreach($typeCats as $t)
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="box" style="background-color: #0f5645;" >
                                <a href="{{route('services.typeCat',$t->id)}}" style="text-decoration: none;"><h3>{{app()->isLocale('kz') ? $t->name: $t->name_ru}}</h3></a><br>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </section><!-- End Values Section -->

    <h3 style="position: absolute; margin-left: 20px; margin-top: 70px"><em> Не керек жатқан байлық судай тасып,<br>
        Тұрмасаң қалың жұртқа қарайласып. <p align="right">Әлішер Науаи</p></em></h3>
    <img src="/assets/img/banner1.png" alt="..." style="position: absolute;height: 500px; width: 300px; margin-top: 200px; margin-left: 120px ">
    <h3 style="position: absolute; margin-left: 1050px; margin-top: 300px"> <em> Адам бойындағы бағалауға лайық қасиет - ақыл емес. Қайта сол ақылды басқаратын қасиеттер: мінез, жүрек, мейірімділік, таза ой.<br> <p align="right">Федор Достоевский</p></em></h3>
    <img src="/assets/img/banner2.png" alt="..." style="position: absolute;height: 500px; width: 300px; margin-top: -30px; margin-left: 1100px ">
    <div class="video-container">

        <img src="/assets/img/wallpaper.jpg" class="sss" id="video-thumbnail">
        <video id="video">
            <source src="/assets/img/video.mp4" type="video/mp4">
        </video>
        <div class="controls">
            <div class="left">
                <button id="skipminus-10">
                    <i class="fa-solid fa-backward"></i>
                </button>
                <button id="play-pause">
                    <i class="fa-solid fa-play"></i>
                </button>
                <button id="skip-10">
                    <i class="fa-solid fa-forward"></i>
                </button>
            </div>

            <!-- div for progress bar -->
            <div class="video-timer">
                <span id="current-time">00:00</span>
                <span id="separator">/</span>
                <span id="max-duration">00:00</span>
            </div>
            <div class="playback-line">
                <div class="progress-bar"></div>

            </div>

            <!-- Right controller div -->
            <div class="right">
                <div class="volume-container">
                    <div id="mute">
                        <i class="fas fa-volume-up"></i>
                    </div>
                    <input type="range"
                           id="volume"
                           min="0"
                           max="1"
                           step="0.01"
                           value="1">
                </div>
            </div>
        </div>
    </div>

    <section id="services">

            <header class="section-header">
                <p style="color: #0f5645">{{__('messages.freq_data')}}</p>
            </header>
            <div class="container">
            <div class="row">
                @foreach($randomServices as $service)
                    <div class="col-4 mb-3">
                        <a href="{{route('services.show',$service->id)}}">
                        <div class="card">
                            <div class="card__body">
                                <span class="tag tag-blue">{{$service->type->name}}</span>
                                <h4>{{$service->service_name}}</h4>
                                <p>{{\Illuminate\Support\Str::words($service->description, 10, '...') }}</p>
                            </div>
                            <div class="card__footer">
                                <div class="user">
                                    <img src="{{asset('assets/img/Logo.png')}}" alt="user__image" class="user__image">
                                    <div class="user__info">
                                        <h5>Qamqor</h5>
                                        <small>{{$service->created_at->format('H:i, d-m')}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
            </div>
        </section>
        <section id="questions" >
            <header class="section-header">
                <p>Жиі қойылатын сұрақтар </p>
            </header>
            <div class="container-full">
                <div class="faq-container">
                    <div class="faq-item">
                        <div class="faq-question">{{__('messages.freq_gues1')}}          <i class="bi bi-arrow-down"></i></div>
                        <div class="faq-answer">
                            {{__('messages.freq_answer1')}}
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">{{__('messages.freq_gues2')}} <i class="bi bi-arrow-down"></i></div>
                        <div class="faq-answer">
                            {{__('messages.freq_answer2')}}
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">{{__('messages.freq_gues3')}} <i class="bi bi-arrow-down"></i></div>
                        <div class="faq-answer">
                            {{__('messages.freq_answer3')}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="marker-info">
            <div class="marker-info">
                <div class="marker-info-item">
                    <img src="http://maps.google.com/mapfiles/ms/icons/blue-dot.png" alt="" class="img_das">
                    <h3 style="color: #0f5645">{{__('messages.center1')}}</h3>
                </div>
                <div class="marker-info-item">
                    <img src="http://maps.google.com/mapfiles/ms/icons/red-dot.png" alt="" class="img_das">
                    <h3 style="color: #0f5645">{{__('messages.center2')}}</h3>
                </div>
                <div class="marker-info-item">
                    <img src="http://maps.google.com/mapfiles/ms/icons/yellow-dot.png" alt="" class="img_das">
                    <h3 style="color: #0f5645">{{__('messages.center3')}}</h3>
                </div>

            </div>
        </section>
    <div class="container">
        <div id="map"></div>
    </div>
        <script>
            function initMap() {
                const almaty = { lat: 43.214571153295346, lng: 76.87131524304337 }; // Координаты Алматы
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 12, // Масштаб карты
                    center: almaty // Центр карты
                });
                const marker = new google.maps.Marker({
                    position: almaty,
                    map: map,
                    title: "Нархоз", // Название метки
                    icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
                });
                const infoWindow = new google.maps.InfoWindow({
                    content: "Благотворительный фонд Нархоз"
                });

                // При клике на маркер открываем информационное окно
                marker.addListener("click", () => {
                    infoWindow.open(map, marker);
                });
                const marker1 = new google.maps.Marker({
                    position: { lat: 43.224657, lng: 76.891044 },
                    map: map,
                    title: "Благ. Фонд",// Название метки
                    icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
                });
                const infoWindow1 = new google.maps.InfoWindow({
                    content: "Благотворительный фонд Тимирязева"
                });

                // При клике на маркер открываем информационное окно
                marker1.addListener("click", () => {
                    infoWindow1.open(map, marker1);
                });
            }
            const video = document.getElementById("video");
            const videoThumbnail = document.getElementById("video-thumbnail");
            const playpause = document.getElementById("play-pause");
            const frwd = document.getElementById("skip-10");
            const bkwrd = document.getElementById("skipminus-10");
            const volume = document.getElementById("volume");
            const mutebtn = document.getElementById("mute");
            const videoContainer = document.querySelector(".video-container");
            const controls = document.querySelector(".controls");
            const progressBar = document.querySelector(".progress-bar");
            const playbackline = document.querySelector(".playback-line");
            const currentTimeRef = document.getElementById("current-time");
            const maxDuration = document.getElementById("max-duration");

            const timeFormatter = (timeInput) => {
                let minute = Math.floor(timeInput / 60);
                minute = minute < 10 ? "0" + minute : minute;
                let second = Math.floor(timeInput % 60);
                second = second < 10 ? "0" + second : second;
                return `${minute}:${second}`;
            };

            // Play-Pause
            playpause.addEventListener("click", function () {
                if (video.paused) {
                    videoThumbnail.style.display = "none";
                    video.play();
                    playpause.innerHTML = '<i class="fa-solid fa-pause"></i>';
                } else {
                    video.pause();
                    playpause.innerHTML = '<i class="fa-solid fa-play"></i>';
                }
            });

            let isPlaying = false;

            // Function to toggle play/pause
            function togglePlayPause() {
                if (isPlaying) {
                    video.pause();
                    playpause.innerHTML = '<i class="fa-solid fa-play"></i>';
                } else {
                    videoThumbnail.style.display = "none";
                    video.play();
                    playpause.innerHTML = '<i class="fa-solid fa-pause"></i>';
                }
                isPlaying = !isPlaying;
            }

            document.addEventListener("keydown", function (event) {
                if (event.key === 32 || event.key === " ") {
                    event.preventDefault();

                    // Prevent scrolling the page down
                    togglePlayPause();
                }
            });

            // Event listener for the video to
            // update the isPlaying flag
            video.addEventListener("play", function () {
                isPlaying = true;
            });

            video.addEventListener("pause", function () {
                isPlaying = false;
            });

            video.addEventListener("ended", function () {
                playpause.innerHTML = '<i class="fa-solid fa-play"></i>';
            });

            // Forward 5 sec or backward 5 sec
            frwd.addEventListener("click", function () {
                video.currentTime += 5;
            });
            bkwrd.addEventListener("click", function () {
                video.currentTime -= 5;
            });

            // Mute or Unmute
            mutebtn.addEventListener("click", function () {
                if (video.muted) {
                    video.muted = false;
                    mutebtn.innerHTML = '<i class="fas fa-volume-up"></i>';
                    volume.value = video.volume;
                } else {
                    video.muted = true;
                    mutebtn.innerHTML = '<i class="fa-solid fa-volume-xmark"></i>';
                    volume.value = 0;
                }
            });

            document.addEventListener("keydown", function (event) {
                if (event.key === "M" || event.key === "m") {
                    event.preventDefault();
                    if (video.muted) {
                        video.muted = false;
                        mutebtn.innerHTML = '<i class="fas fa-volume-up"></i>';
                        volume.value = video.volume;
                    } else {
                        video.muted = true;
                        mutebtn.innerHTML = '<i class="fa-solid fa-volume-xmark"></i>';
                        volume.value = 0;
                    }
                }
            });

            volume.addEventListener("input", function () {
                video.volume = volume.value;
                if (video.volume === 0) {
                    mutebtn.innerHTML = '<i class="fa-solid fa-volume-xmark"></i>';
                } else {
                    mutebtn.innerHTML = '<i class="fas fa-volume-up"></i>';
                }
            });

            // Hide or unhide controllers div
            videoContainer.addEventListener("mouseenter", () => {
                controls.style.opacity = 1;
            });

            videoContainer.addEventListener("mouseleave", () => {
                controls.style.opacity = 0;
            });

            // Update the playback line as the video plays
            video.addEventListener("timeupdate", () => {
                const currentTime = video.currentTime;
                const duration = video.duration;
                const percentage = (currentTime / duration) * 100;
                progressBar.style.width = percentage + "%";
            });

            function showThumbnail() {
                videoThumbnail.style.display = "block";
            }

            // Reseting the playback line when the video ends
            video.addEventListener("ended", () => {
                progressBar.style.width = "0%";
                showThumbnail();
            });

            setInterval(() => {
                currentTimeRef.innerHTML = timeFormatter(video.currentTime);
                maxDuration.innerText = timeFormatter(video.duration);
            }, 1);

            playbackline.addEventListener("click", (e) => {
                let timelineWidth = playbackline.clientWidth;
                video.currentTime = (e.offsetX / timelineWidth) * video.duration;
            });
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgKyr05sq4m3ExH8K0KRYyPj6ieI4JPGU&callback=initMap" async defer></script>
@endsection


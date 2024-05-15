@extends('layouts.app')
@section('content')
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            text-align: center;
            padding: 20px 0;
            position: absolute;
            margin-top: 10px;
            width: 750px;
        }

        header h1 {
            font-size: 2.5em;
            color: #0f5645;
        }

        header p {
            font-size: 1.2em;
            color: #666;
        }

        .qr-codes {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 0;
        }

        .qr-code {
            text-align: center;
            margin-top: 60px;
        }

        .qr-code img {
            width: 250px;
            height: 250px;
            margin-bottom: 10px;
            margin-left: 50px;
        }

        .qr-code button {
            background-color: #d6b398;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            margin-left: 50px;
            cursor: pointer;
            font-size: 1em;
            color: white;
            border-radius: 5px;
        }

        .app-preview img {
            width: 400px;
            height: auto;
        }

        .advantages {
            background-color: #0f5645;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .advantages h2 {
            margin-bottom: 20px;
            font-size: 2em;
        }

        .advantages {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .advantage {
            flex: 1;
            max-width: 200px;
            margin: 20px;
            text-align: center;
        }

        .advantage-icon {
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
        }

        .advantage h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .advantage p {
            font-size: 1.2em;
            color: #d6b398;
        }
        .details {
            color: black;
            padding: 40px 20px;
        }

        .details-content {
            display: flex;
            align-items: center;
        }

        .details-images {
            flex: 1;
            text-align: center;
        }

        .details-images img {
            width: 400px;
            height: auto;
            margin: 0 10px;
        }

        .details-text {
            flex: 2;
            padding: 0 20px;
            font-size: 1.2em;
        }

        .details-text p {
            margin-bottom: 20px;
        }

        .details-text strong {
            display: block;
            font-size: 1.5em;
            margin-bottom: 10px;
        }
    </style>
    <div class="container">
        @if(app()->isLocale('kz'))
            <header>
                <h1>Мобильді қосымша </h1>
                <p>«Qamqor» адамдарға арналған көмекші қосымша</p>
                <p>Біз сіздерге көмек көрсетуді жеңілдетеміз! Біздің бағдарлама AppStore және Google Play бағдарламаларында тегін жүктеп алуға болады!</p>
            </header>
            <section class="qr-codes">
                <div class="qr-code">
                    <img src="assets/img/mobile/AppStore.png" alt="QR Code for iPhone"><br>
                    <button>iPhone-ға жүктеу</button>
                </div>
                <div class="qr-code">
                    <img src="assets/img/mobile/PlayMarket.png" alt="QR Code for Android"><br>
                    <button>Android-қа жүктеу</button>
                </div>
                <div class="app-preview">
                    <img src="assets/img/mobile/Phone.jpeg" alt="App Preview">
                </div>
            </section>
            <section style="background: #0f5645">
                <h2 style="color: white" align="center">Мобильді бағдарлама артықшылықтары</h2>
                <div class="advantages">
                    <div class="advantage">
                        <img src="assets/img/mobile/icons/verif.png" alt="Mobility Icon" class="advantage-icon">
                        <h3>Тексеру</h3>
                        <p>Мобильді қосымшадағы тексеру барысында сіздің сәйкестік деректеріңіз расталады және қосымшаның функциялары мен деректеріне қауіпсіз қол жеткізуді қамтамасыз етеді.</p>
                    </div>
                    <div class="advantage">
                        <img src="assets/img/mobile/icons/mobile.png" alt="Settings Icon" class="advantage-icon">
                        <h3>Мобильді</h3>
                        <p>Қаражатты кез келген уақытта және кез келген жерде онлайн жіберуге болады.</p>
                    </div>
                    <div class="advantage">
                        <img src="assets/img/mobile/icons/access.png" alt="Analytics Icon" class="advantage-icon">
                        <h3>Қол жетімділік</h3>
                        <p>Мобильді бағдарламалар кез келген уақытта, кез келген жерде, құрылғыдан қызметтерге немесе ақпаратқа лезде қол жеткізуді қамтамасыз етеді.</p>
                    </div>
                    <div class="advantage">
                        <img src="assets/img/mobile/icons/personalisation.png" alt="Notifications Icon" class="advantage-icon">
                        <h3>Жекелендіру</h3>
                        <p>Қосымшалар қажетті мазмұнды немесе функцияны ұсына отырып, пайдаланушыларды іздеуге бейімделуі мүмкін.</p>
                    </div>
                </div>
            </section>
            <br><br>
            <section class="details">
                <div class="details-content">
                    <div class="details-images">
                        <img src="assets/img/mobile/Phone2.jpeg" alt="App Screen 1">
                    </div>
                    <div class="details-text">
                        <p>Мобильді қосымшада 3 көмек бар. Сол бойынша пайдаланушы өзіне қажетті деректерді көріп, өз қажеттіліктеріне пайдалана алады. Еріктілер көмегінде формаларды толтыра отырып, ерікті болып көмектесе алады немесе еріктілер көмегіне жүгіне алады. Ал қайырымдылық көмегінде әр қорға өз еркімен қаражат жібере отырып, қол ұшын соза алады. Заңгерлік көмек бойынша заңгерлер туралы ақпаратты көре алады және  заңдарды оқи алады.</p>
                        <p>Мобильді қосымшада бір артықшылықтарының, ерекшеліктерінің бірі - барлығының бір жүйеде орналасуы. Бір сөзбен айтқанда, үш көмек түрлерін әр бағдарламалардан іздеп отырмайды.</p>
                        <p><strong>Мобильді қосымша</strong></p>
                        <p><strong style="font-size: 18px">«Qamqor» - бұл адамдарға арналған көмекші қосымша, соның арқасында әр респондентке өз жәрдемімізді беруге ұмтыламыз!</strong></p>
                    </div>
                </div>
            </section>
        @else
            <header>
                <h1>Мобильное приложение</h1>
                <p>«Qamqor» вспомогательное приложение для людей</p>
                <p>Облегчаем помощь для вас! Доступно для загрузки наше приложение в AppStore и <br> Google Play бесплатно!</p>
            </header>
            <section class="qr-codes">
                <div class="qr-code">
                    <img src="assets/img/mobile/AppStore.png" alt="QR Code for iPhone"><br>
                    <button>Скачать на iPhone</button>
                </div>
                <div class="qr-code">
                    <img src="assets/img/mobile/PlayMarket.png" alt="QR Code for Android"><br>
                    <button>Скачать на Android</button>
                </div>
                <div class="app-preview">
                    <img src="assets/img/mobile/Phone.jpeg" alt="App Preview">
                </div>
            </section>
             <section style="background: #0f5645">
                <h2 style="color: white" align="center">Преимущества мобильного приложения</h2>
                <div class="advantages">
                    <div class="advantage">
                        <img src="assets/img/mobile/icons/verif.png" alt="Mobility Icon" class="advantage-icon">
                        <h3>Верификация</h3>
                        <p>В процессе верификации в мобильном приложении, ваша личность подтверждается и аутентифицируется для обеспечения безопасного доступа к функциям и данным приложения.</p>
                    </div>
                    <div class="advantage">
                        <img src="assets/img/mobile/icons/mobile.png" alt="Settings Icon" class="advantage-icon">
                        <h3>Мобильность</h3>
                        <p>Пожертвовать средства возможно в любое время и в любом месте.</p>
                    </div>
                    <div class="advantage">
                        <img src="assets/img/mobile/icons/access.png" alt="Analytics Icon" class="advantage-icon">
                        <h3>Удобство доступа</h3>
                        <p>Мобильные приложения обеспечивают мгновенный доступ к сервисам или информации прямо с вашего устройства в любое время и в любом месте.</p>
                    </div>
                    <div class="advantage">
                        <img src="assets/img/mobile/icons/personalisation.png" alt="Notifications Icon" class="advantage-icon">
                        <h3>Персонализация</h3>
                        <p>Приложение могут адаптироваться по поиску пользователей,предлагая нужный контент или функцию.</p>
                    </div>
                </div>
            </section>
            <br><br>
            <section class="details">
                <div class="details-content">
                    <div class="details-images">
                        <img src="assets/img/mobile/Phone2.jpeg" alt="App Screen 1">
                    </div>
                    <div class="details-text">
                        <p>В мобильном приложении есть 3 помощи. Таким образом, пользователь может видеть и использовать необходимые ему данные для своих нужд. Заполняя формы в волонтерской помощи, он может помочь волонтером или обратиться за помощью к волонтерам. А на благотворительность, добровольно направляя средства в каждый фонд, может протянуть руку помощи. Юристы по оказанию юридической помощи могут просматривать информацию и читать законы.</p>
                        <p>Одним из преимуществ, особенностей мобильного приложения является расположение всех в одной системе. Одним словом, три вида помощи ищут не в каждой программе.</p>
                        <p><strong>Мобильное Приложение</strong></p>
                        <p><strong style="font-size: 18px">"Qamqor" - это вспомогательное приложение для людей, благодаря которому мы стремимся предоставить каждому респонденту свою помощь!</strong></p>
                    </div>
                </div>
            </section>
        @endif
    </div>
@endsection

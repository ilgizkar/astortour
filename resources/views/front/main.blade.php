<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="#">
    <link rel="image_src" href="#">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="pageDescription" content="">
    <meta property="twitterDescription" content="">

    <meta name="Keywords" content="{{ isset($keywords) ? $keywords : 'Клумба' }}">
    <meta name="description" content="{{ isset($description) ? $description : 'Клумба' }}" />
    <link rel="canonical" href="{{ isset($canonical) ? $canonical : 'https://klumba.ru/' }}"/>
    <title>Треккинг в Непале и походы в Гималаях</title>

{{--    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset("/icons/apple-icon-57x57.png") }}">--}}
{{--    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset("/icons/apple-icon-60x60.png") }}">--}}
{{--    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset("/icons/apple-icon-72x72.png") }}">--}}
{{--    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("/icons/apple-icon-76x76.png") }}">--}}
{{--    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset("/icons/apple-icon-114x114.png") }}">--}}
{{--    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset("/icons/apple-icon-120x120.png") }}">--}}
{{--    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset("/icons/apple-icon-144x144.png") }}">--}}
{{--    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset("/icons/apple-icon-152x152.png") }}">--}}
{{--    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("/icons/apple-icon-180x180.png") }}">--}}
{{--    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset("/icons/android-icon-192x192.png") }}">--}}
{{--    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("/icons/favicon-32x32.png") }}">--}}
{{--    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset("/icons/favicon-96x96.png") }}">--}}
{{--    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("/icons/favicon-16x16.png") }}">--}}
{{--    <link rel="manifest" href="{{ asset("/icons/manifest.json") }}">--}}
{{--    <meta name="msapplication-TileColor" content="#ffffff">--}}
{{--    <meta name="msapplication-TileImage" content="{{ asset("/icons/ms-icon-144x144.png") }}">--}}
{{--    <meta name="theme-color" content="#ffffff">--}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="{{ asset('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="h-100 text-center text-white">
    <div id="app">
        <div class="menu">
            <div class="menu-block title" style="min-width: 170px;">
                <a href="">Astortour</a>
                <small>«Горы зовут и я должен идти!»</small>
            </div>
            <div class="menu-block" style="min-width: 650px;">
                <ul class="nav">
{{--                    <li class="item">--}}
{{--                        <a href="">О нас</a>--}}
{{--                    </li>--}}
{{--                    <li class="item">--}}
{{--                        <a href="">Расписание туров</a>--}}
{{--                    </li>--}}
{{--                    <li class="item">--}}
{{--                        <a href="">Отчеты</a>--}}
{{--                    </li>--}}
{{--                    <li class="item">--}}
{{--                        <a href="">Полезное</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
            <div class="menu-block" style="min-width: 150px;">
                <div class="social-links-wrap">
                    <div class="social-links-item">
                        <a href="https://www.facebook.com/profile.php?id=100069316142836" target="_blank">
                            <svg style="fill:#d1dde6;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><path d="M47.761,24c0,13.121-10.638,23.76-23.758,23.76C10.877,47.76,0.239,37.121,0.239,24c0-13.124,10.638-23.76,23.764-23.76
C37.123,0.24,47.761,10.876,47.761,24 M20.033,38.85H26.2V24.01h4.163l0.539-5.242H26.2v-3.083c0-1.156,0.769-1.427,1.308-1.427
h3.318V9.168L26.258,9.15c-5.072,0-6.225,3.796-6.225,6.224v3.394H17.1v5.242h2.933V38.85z"></path></svg>
                        </a>
                    </div>
                    <div class="social-links-item">
                        <a href="https://vk.com/id697936373" target="_blank">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><path style="fill:#d1dde6;" d="M47.761,24c0,13.121-10.639,23.76-23.76,23.76C10.878,47.76,0.239,37.121,0.239,24c0-13.123,10.639-23.76,23.762-23.76
C37.122,0.24,47.761,10.877,47.761,24 M35.259,28.999c-2.621-2.433-2.271-2.041,0.89-6.25c1.923-2.562,2.696-4.126,2.45-4.796
c-0.227-0.639-1.64-0.469-1.64-0.469l-4.71,0.029c0,0-0.351-0.048-0.609,0.106c-0.249,0.151-0.414,0.505-0.414,0.505
s-0.742,1.982-1.734,3.669c-2.094,3.559-2.935,3.747-3.277,3.524c-0.796-0.516-0.597-2.068-0.597-3.171
c0-3.449,0.522-4.887-1.02-5.259c-0.511-0.124-0.887-0.205-2.195-0.219c-1.678-0.016-3.101,0.007-3.904,0.398
c-0.536,0.263-0.949,0.847-0.697,0.88c0.31,0.041,1.016,0.192,1.388,0.699c0.484,0.656,0.464,2.131,0.464,2.131
s0.282,4.056-0.646,4.561c-0.632,0.347-1.503-0.36-3.37-3.588c-0.958-1.652-1.68-3.481-1.68-3.481s-0.14-0.344-0.392-0.527
c-0.299-0.222-0.722-0.298-0.722-0.298l-4.469,0.018c0,0-0.674-0.003-0.919,0.289c-0.219,0.259-0.018,0.752-0.018,0.752
s3.499,8.104,7.463,12.23c3.638,3.784,7.764,3.36,7.764,3.36h1.867c0,0,0.566,0.113,0.854-0.189
c0.265-0.288,0.256-0.646,0.256-0.646s-0.034-2.512,1.129-2.883c1.15-0.36,2.624,2.429,4.188,3.497
c1.182,0.812,2.079,0.633,2.079,0.633l4.181-0.056c0,0,2.186-0.136,1.149-1.858C38.281,32.451,37.763,31.321,35.259,28.999"></path></svg>
                        </a>
                    </div>
                    <div class="social-links-item">
                        <a href="https://www.instagram.com/invites/contact/?i=1f8dkidhpi8e8&utm_content=b5z4fab" target="_blank">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30" xml:space="preserve"><desc>Instagram</desc><path style="fill:#d1dde6;" d="M15,11.014 C12.801,11.014 11.015,12.797 11.015,15 C11.015,17.202 12.802,18.987 15,18.987 C17.199,18.987 18.987,17.202 18.987,15 C18.987,12.797 17.199,11.014 15,11.014 L15,11.014 Z M15,17.606 C13.556,17.606 12.393,16.439 12.393,15 C12.393,13.561 13.556,12.394 15,12.394 C16.429,12.394 17.607,13.561 17.607,15 C17.607,16.439 16.444,17.606 15,17.606 L15,17.606 Z"></path><path style="fill:#d1dde6;" d="M19.385,9.556 C18.872,9.556 18.465,9.964 18.465,10.477 C18.465,10.989 18.872,11.396 19.385,11.396 C19.898,11.396 20.306,10.989 20.306,10.477 C20.306,9.964 19.897,9.556 19.385,9.556 L19.385,9.556 Z"></path><path style="fill:#d1dde6;" d="M15.002,0.15 C6.798,0.15 0.149,6.797 0.149,15 C0.149,23.201 6.798,29.85 15.002,29.85 C23.201,29.85 29.852,23.202 29.852,15 C29.852,6.797 23.201,0.15 15.002,0.15 L15.002,0.15 Z M22.666,18.265 C22.666,20.688 20.687,22.666 18.25,22.666 L11.75,22.666 C9.312,22.666 7.333,20.687 7.333,18.28 L7.333,11.734 C7.333,9.312 9.311,7.334 11.75,7.334 L18.25,7.334 C20.688,7.334 22.666,9.312 22.666,11.734 L22.666,18.265 L22.666,18.265 Z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-block">
                <div class="right-button">
                    <a href="">Заявка на участие</a>
                </div>
            </div>
        </div>

        <div class="main-block">
            <div class="main-black"></div>
            <div class="main-image"></div>
            <div class="main-text">
                <h2>ТРЕККИНГ В НЕПАЛЕ</h2>
                <h1>Astortour</h1>
                <p>Лучше гор могут быть только горы,<br>
                На которых ещё не бывал</p>
            </div>
        </div>

        <div class="second-block">
            <p>1. Пассажирам, которые в течение последних 3 недель находились в Ботсване, Эсватини, Гонконге (САР Китай), Лесото, Малави, Мозамбике, Намибии, Южной Африке или Зимбабве или следовали транзитом через них, въезд запрещен.</p>
            <p>2. Пассажирам не разрешается следовать транзитом через Непал в Индию.</p>
            <p>3. Пассажиры должны иметь сертификат о вакцинации COVID-19, подтверждающий, что они были полностью вакцинированы по крайней мере за 14 дней до прибытия.<br>
                Это не относится к:<br>
                — граждане Непала;<br>
                — пассажиры с визой, выданной дипломатическим представительством Непала.</p>
            <p>4. Пассажиры должны иметь отрицательный результат теста COVID-19, полученный не позднее чем за 72 часа до вылета из первого пункта посадки. Принимаются тесты GeneXpert, NAAT и ОТ-ПЦР.<br>
                — Это не относится к пассажирам младше 5 лет.</p>
            <p>5. Пассажиры должны получить “Онлайн-форму прибытия международного путешественника" по адресу https://ccmc.gov.np /</p>
            <p>6. Пассажиры должны иметь при себе подтверждение бронирования отеля.<br>
                Это не относится к:<br>
                — пассажиры с сертификатом о вакцинации COVID-19, подтверждающим, что они были полностью вакцинированы по крайней мере за 14 дней до прибытия;<br>
                — пассажиры младше 5 лет и сопровождающие их пассажиры;<br>
                — пассажиры 75 лет и старше.</p>
            <p>7. Пассажиры могут быть подвергнуты гостиничному карантину в течение 10 дней за свой счет.<br>
                — Это не относится к пассажирам с сертификатом о вакцинации COVID-19, подтверждающим, что они были полностью вакцинированы по крайней мере за 14 дней до прибытия.</p>
            <p>8. Виза по прибытии возобновлена для пассажиров, имеющих право на получение визы, с сертификатом о вакцинации COVID-19, подтверждающим, что они были полностью вакцинированы по крайней мере за 14 дней до прибытия.<br>
                — Виза по прибытии не предоставляется пассажирам, путешествующим с экстренным паспортом, временным паспортом или временным проездным документом.</p>
            <p>9. Пассажиры должны иметь при себе копию разрешений на альпинизм, треккинг и т.д.<br>
                Это не относится к:<br>
                — граждане Непала;<br>
                — супруги граждан Непала;<br>
                — пассажиры с сертификатом о вакцинации COVID-19, подтверждающим, что они были полностью вакцинированы по крайней мере за 14 дней до прибытия.</p>
        </div>

        <div class="carousel-block">
            <carousel-component></carousel-component>
        </div>
    </div>
</body>
</html>


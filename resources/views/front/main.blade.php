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

    <meta name="Keywords" content="{{ isset($keywords) ? $keywords : 'Astortour' }}">
    <meta name="description" content="{{ isset($description) ? $description : 'Astortour' }}" />
    <link rel="canonical" href="{{ isset($canonical) ? $canonical : 'http://astortour.ru/' }}"/>
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
            <div class="menu-block first">
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
            <div class="menu-block second">
                <div class="social-links-wrap">
                    <div class="icons">
                        <div class="social-links-item">
                            <a href="https://api.whatsapp.com/send?phone=79872908288">
                                <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 48C10.7452 48 0 37.2548 0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48ZM24.7911 37.3525C32.6595 37.3493 39.059 30.9483 39.0621 23.0815C39.0637 19.2683 37.5806 15.6828 34.8862 12.9854C32.1918 10.2879 28.6086 8.80165 24.7909 8.8C16.9248 8.8 10.5228 15.2017 10.5196 23.0702C10.5186 25.5855 11.1757 28.0405 12.4246 30.2048L10.4 37.6L17.9653 35.6155C20.0498 36.7524 22.3967 37.3517 24.7852 37.3525H24.7911Z" fill="#d1dde6"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3159 33.0319L13.8265 34.2096L15.0248 29.8324L14.7428 29.3836C13.5554 27.4951 12.9283 25.3124 12.9292 23.0711C12.9318 16.5311 18.2529 11.2104 24.7958 11.2104C27.964 11.2115 30.9422 12.4469 33.1817 14.689C35.4212 16.9311 36.6538 19.9112 36.6526 23.0807C36.6499 29.6212 31.3289 34.9424 24.7911 34.9424H24.7863C22.6578 34.9415 20.5702 34.3697 18.749 33.289L18.3159 33.0319ZM31.9808 26.4751C31.8917 26.3264 31.654 26.2372 31.2974 26.0586C30.9408 25.8801 29.1877 25.0176 28.8608 24.8985C28.534 24.7795 28.2961 24.7201 28.0585 25.0769C27.8208 25.4339 27.1374 26.2372 26.9294 26.4751C26.7214 26.7131 26.5133 26.7429 26.1569 26.5644C25.8003 26.3859 24.6513 26.0094 23.2893 24.7945C22.2292 23.8489 21.5135 22.6813 21.3055 22.3243C21.0975 21.9673 21.2834 21.7743 21.4619 21.5965C21.6223 21.4367 21.8185 21.1799 21.9968 20.9718C22.1751 20.7636 22.2345 20.6148 22.3533 20.377C22.4722 20.1389 22.4128 19.9307 22.3236 19.7522C22.2345 19.5737 21.5213 17.8185 21.2242 17.1045C20.9347 16.4092 20.6408 16.5034 20.4219 16.4924C20.2141 16.482 19.9762 16.4798 19.7385 16.4798C19.5008 16.4798 19.1144 16.569 18.7876 16.926C18.4607 17.283 17.5395 18.1457 17.5395 19.9008C17.5395 21.656 18.8173 23.3516 18.9956 23.5896C19.1739 23.8276 21.51 27.4293 25.0871 28.9739C25.9379 29.3413 26.602 29.5607 27.12 29.725C27.9742 29.9965 28.7516 29.9582 29.3659 29.8663C30.0511 29.764 31.4756 29.0038 31.7729 28.1709C32.0699 27.3378 32.0699 26.6238 31.9808 26.4751Z" fill="#d1dde6"/>
                                </svg>
                            </a>
                        </div>
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
                            <a href="https://www.instagram.com/astortour/" target="_blank">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30" xml:space="preserve"><desc>Instagram</desc><path style="fill:#d1dde6;" d="M15,11.014 C12.801,11.014 11.015,12.797 11.015,15 C11.015,17.202 12.802,18.987 15,18.987 C17.199,18.987 18.987,17.202 18.987,15 C18.987,12.797 17.199,11.014 15,11.014 L15,11.014 Z M15,17.606 C13.556,17.606 12.393,16.439 12.393,15 C12.393,13.561 13.556,12.394 15,12.394 C16.429,12.394 17.607,13.561 17.607,15 C17.607,16.439 16.444,17.606 15,17.606 L15,17.606 Z"></path><path style="fill:#d1dde6;" d="M19.385,9.556 C18.872,9.556 18.465,9.964 18.465,10.477 C18.465,10.989 18.872,11.396 19.385,11.396 C19.898,11.396 20.306,10.989 20.306,10.477 C20.306,9.964 19.897,9.556 19.385,9.556 L19.385,9.556 Z"></path><path style="fill:#d1dde6;" d="M15.002,0.15 C6.798,0.15 0.149,6.797 0.149,15 C0.149,23.201 6.798,29.85 15.002,29.85 C23.201,29.85 29.852,23.202 29.852,15 C29.852,6.797 23.201,0.15 15.002,0.15 L15.002,0.15 Z M22.666,18.265 C22.666,20.688 20.687,22.666 18.25,22.666 L11.75,22.666 C9.312,22.666 7.333,20.687 7.333,18.28 L7.333,11.734 C7.333,9.312 9.311,7.334 11.75,7.334 L18.25,7.334 C20.688,7.334 22.666,9.312 22.666,11.734 L22.666,18.265 L22.666,18.265 Z"></path>
                            </svg>
                            </a>
                        </div>
                    </div>
                    <div class="phone">
                        <a href="tel:89872908288">+7 (987) 290-8288</a>
                    </div>
                </div>
            </div>
            <div class="menu-block last">
                <div class="right-button">
                    <a id="scroll_to_form">Заявка на участие</a>
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

        <div class="main-info">
            <h2>Почему мы?</h2>
            <div class="text">
                <p>А. Потому что безопасно. Во время всего путешествия вас сопровождает наш профессиональный горный гид с опытом.</p>
                <p>Б. Это удобно. Мы полностью организуем трансфер с Катманду до начала трека и обратно. Также мы можем организовать носильщиков шерпов, которые будут нести ваши поклажи и вещи.</p>
                <p>В. Это выгодно. В Катманду можно купить отличное новое и б/у оборудование для активного треккинга по ценам в 2 раза ниже, чем в России. Очень многое делается именно в Непале.</p>
                <p>Г. Прикоснуться к месту, где родилась буддисткая религия. Мы обязательно посетим отдалённые буддисткие монастыри и храмы.</p>
                <p>Д. Ну и побывать в том месте, где мало кто из ваших друзей и знакомых был. Проверить свою силу духа и погрузиться в настоящее приключение</p>
            </div>
        </div>
        <hr>
        <div class="info-block">
            <p>
                Проводим набор группы для туристического похода в Непале. Маршрут состоит в виде кольца вокруг Аннапурны, проходящий через разнообразные ландшафты: предгорья с рисовыми террасами и пастбищами, которые время от времени сменяются бамбуковыми зарослями и влажными субтропическими лесами; скалы и ущелья, покрытые лиственными и хвойными лесами. Тур пройдет весной с 4 по 18 апреля, именно в этот период вы можете увидеть, как цветут роскошные алые рододендроны и белые магнолии. Стоимость 1000$,включено: трансфер, ночевки  в гестхаусах, все разрешения на подьем в горы. Собрание состоится 24 февраля. Ты хочешь увидеть Гималайские горы в их первозданной красе, вдали от «цивилизации»? Тогда мы ждем тебя в нашу команду.
            </p>
        </div>

        <div class="carousel-block">
            <carousel-component></carousel-component>
        </div>

        <div class="second-block">
            <h5>Правила въезда в Непал</h5>
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

        <div class="footer-block">
            <h5>Для участия в треккинге оставьте свою заявку и мы свяжемся с вами</h5>
            <form id="form" action="https://formspree.io/f/xqknelnk" method="POST" class="form">
                <input name="name" class="form-input" placeholder="Имя" type="text">
                <input name="email" class="form-input" placeholder="Email" type="text">
                <textarea class="form-input" name="comment" id="" cols="30" placeholder="Комментарий" rows="5"></textarea>
                <button type="submit" class="send">Оставить заявку</button>
            </form>
        </div>
    </div>
</body>
</html>


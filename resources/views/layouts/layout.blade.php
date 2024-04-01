<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>
        @section('title') Blog @show
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Favicons -->
    <style>
        /* Кнопка выпадающего списка */
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        /* Контейнер <div> - необходим для размещения выпадающего содержимого */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Выпадающее содержимое (скрыто по умолчанию) */
        .dropdown-content .navbar-toggler {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Ссылки внутри выпадающего списка */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Изменение цвета выпадающих ссылок при наведении курсора */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Показать выпадающее меню при наведении курсора */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Изменение цвета фона кнопки раскрывающегося списка при отображении содержимого раскрывающегося списка */
        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

        body {
            animation: background 8s infinite alternate;
        }

        @keyframes background {
            50% {
                background: rgba(135, 207, 235, 0.623);
                box-shadow: 0 -200px 100px -100px rgba(255, 0, 0, 0.295) inset;
            }
        }

        p {
            font-size: 20px;
            font-family: 'Comic Sans MS', cursive;
            color: pink;
            text-decoration: underline;
        }

        .pp {
            font-size: 4px;
            font-family: 'Courier New', monospace;
            color: lawngreen;
            text-transform: uppercase;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>

<body>

    <header>
        @section('header')
            <div class="navbar navbar-light" style="background-color: #c08d00;" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-1 col-md-7 py-2">
                            <h4 class="text-white">Home</h4>
                            <pp class="">Добавьте некоторую информацию об альбоме ниже, авторе или любом другом
                                фоновом контексте. Сделайте это из нескольких предложений, чтобы люди могли уловить
                                некоторые информативные моменты. Затем свяжите их с некоторыми сайтами социальных сетей или
                                контактной информацией.</p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4 class="text-white">Пользовательская финя</h4>
                            <ul class="list-unstyled">
                                @auth
                                    <li><a href="{{ route('post.create') }}" class="text-white">Создать объевление</a></li>
                                    <li><a href="{{ route('logout') }}" class="text-white">Выйти с учетки</a></li>
                                @endauth
                                @guest
                                    <li><a href="{{ route('user.create') }}" class="text-white">Регистрация</a></li>
                                    <li><a href="{{ route('login.create') }}" class="text-white">Авторизация</a></li>
                                @endguest
                                <li><a href="{{ route('about') }}" class="text-white">about</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light"
                        style="padding: 12px 18px; text-align: center;">
                        <a class="navbar-brand" href="/home">Home</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Категории
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark"
                                        aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="/post/home">Хата</a></li>
                                        <li><a class="dropdown-item" href="/post/car">Кар</a></li>
                                        <li><a class="dropdown-item" href="/post/services">Услуги</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">


                            </form><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                        </div>
                    </nav>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                        aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        @show
    </header>
    @unless (Auth::check('false'))
        You are not signed in, bitch.
    @endunless

    <main>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')

    </main>

    @include('layouts.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

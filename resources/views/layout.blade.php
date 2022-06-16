<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{{secure_asset('css/index.css')}}"/>
    <link
        rel="shortcut icon"
        href="{{secure_asset('img/favicon-black.png')}}"
        type="image/x-icon"
    />
    <title>Tournament</title>
</head>

<body>
<main class="main">
    <header class="header">
        <div class="wrapper920">
            <div class="header__logo">
                <a href="{{route('home')}}" class="header__logo-link">
                    <img
                        alt="#"
                        src="{{secure_asset('img/favicon-white.png')}}"
                        height="20"
                        width="20"
                    />
                    <span>Tournament</span>
                </a>
            </div>
            <div class="header__link"><a href="{{route('tournaments')}}" class="header__logo-link">Tournaments</a></div>
            <div class="header__link"><a href="{{route('players')}}" class="header__logo-link">Players</a></div>

        </div>
    </header>


    <section class="content" id="screen1">
        <div class="wrapper920">
            @yield('content')

        </div>
    </section>

</main>
</body>
@yield('scripts')

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamertivity</title>
    <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <header id="profile">
        <div class="black_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="#">
                                <img src="{{asset('assets/img/logo.png')}}" alt="Gamertivity Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="gamertivity_nav">
                            <nav id="cssmenu">
                                <div class="head-mobile"></div>
                                <div class="button"></div>
                                <ul class="f_only">
                                    <li class="active only"><a href="{{route('home')}}">Начало</a></li>
                                    <li class="only">
                                        <a href="#">Игри</a>
                                        <ul class="toggle_game">
                                            <li><a href="#">League of Legends</a></li>
                                            <li><a href="#">Fortnite</a></li>
                                            <li><a href="#">CS:GO</a></li>
                                            <li><a href="#">Valorant</a></li>
                                            <li><a href="#">PUBG</a></li>
                                            <li><a href="#">Apex</a></li>
                                            <li><a href="#">Overwatch</a></li>
                                            <li><a href="#">Minecraft</a></li>
                                            <li><a href="#">AION</a></li>
                                            <li><a href="#">WOW</a></li>
                                        </ul>
                                    </li>
                                    <li class="only"><a href="">Класация</a></li>
                                    <li class="only"><a href="{{route('news.index')}}">Новини</a></li>
                                    <li class="only"><a href="#">Магазин</a></li>
                                    <li class="only"><a href="{{route('contact.index')}}">Контакти</a></li>
                                    <li class="only"><a href="{{route('faq.index')}}">FAQ</a></li>
                                    <li class="search_bar_icon"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                    @if(Auth::user())
                                    <div class="right">
                                        <img src="assets/img/profile_img.png" alt="">
                                        <div class="logout_profile">
                                            <ul class="profile_menu">
                                                <span class="user_name">milioo</span>
                                                <li><a href="{{route('profile.index')}}"><i class="fa fa-user" aria-hidden="true"></i> Профил</a></li>
                                                <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Настройки</a></li>
                                                <li><a href="#"> <i class="fa fa-envelope" aria-hidden="true"></i>Съобщения</a></li>
                                                <li><a href="{{route('auth.logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Изход</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @else
                                        <li class="login"><a href="{{route('auth.login')}}"><i class="fa fa-user-circle" aria-hidden="true"></i> Login</a></li>
                                    @endif
                                </ul>
                            </nav>
                            <div class="search_bar">
                                <input type="text" name="search" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

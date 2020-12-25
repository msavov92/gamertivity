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
    @php
        $route = \Request::route()->getName();
    @endphp
    @if($route === 'profile.index')
    <header id="profile_user">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="login_logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('assets/img/logo.png')}}" alt="Gamertivity Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="social_login">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/Gamertivity" target="_blank">
                                            <img src="{{asset('assets/img/social_icon/facebook.png')}}" alt="Follow us in Facebook" title="Follow us in Facebook">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/gamertivity/" target="_blank">
                                            <img src="{{asset('assets/img/social_icon/instagram.png')}}" alt="Follow us in Instagram" title="Follow us in Instagram">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCWdo3Bt4Z0mcdNTT1s-3Lkg" target="_blank">
                                            <img src="{{asset('assets/img/social_icon/youtube.png')}}" alt="Follow us in YouTube" title="Follow us in YouTube">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitch.tv/gamertivity" target="_blank">
                                            <img src="{{asset('assets/img/social_icon/twitch.png')}}" alt="Follow us in Twitch" title="Follow us in Twitch">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://discord.com/invite/ws3v7qa" target="_blank">
                                            <img src="{{asset('assets/img/social_icon/discord.png')}}" alt="Follow us in Discord" title="Follow us in Discord">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="user_login">
                                <a href="#">
                                    <img src="" alt="">
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @else
    <header id="profile">
        <div class="black_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="{{route('home')}}">
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
                                    <li class="only"><a href="{{route('ranking.index')}}">Класация</a></li>
                                    <li class="only"><a href="{{route('news.index')}}">Новини</a></li>
                                    <li class="only"><a href="{{route('store.index')}}">Магазин</a></li>
                                    <li class="only"><a href="{{route('contact.index')}}">Контакти</a></li>
                                    <li class="only"><a href="{{route('faq.index')}}">FAQ</a></li>
                                    <li class="search_bar_icon">
                                        <a href="#">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    @if(Auth::user())
                                    <div class="right">
                                        <a href="{{route('profile.index')}}">
                                            <img src="assets/img/profile_img.png" alt="">
                                        </a>
                                    </div>
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
    @endif



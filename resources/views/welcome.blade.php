
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamertivity</title>
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <header>
        <div class="f_nav">
            <div class="container">
                <div class="f_nav_before">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="logo">
                                <a href="#">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="social_nav">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <form action="" method="POST">
                                            <button><i class="fa fa-user-circle-o" aria-hidden="true"></i> Login</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="main_nav">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#">Начало</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Игри <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Fortnite</a></li>
                                                <li><a href="#">League of legends</a></li>
                                                <li><a href="#">Minecraft</a></li>
                                                <li><a href="#">CS:GO</a></li>
                                                <li><a href="#">MU Online</a></li>
                                                <li><a href="#">PUBG</a></li>
                                                <li><a href="#">AION</a></li>
                                                <li><a href="#">APEX</a></li>
                                                <li><a href="#">Overwatch</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Новини</a></li>
                                        <li><a href="#">Промоции</a></li>
                                        <li><a href="#">За Нас</a></li>
                                        <li><a href="#">Контакти</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="h_title">
                        <h1>The standard lorem ipsum</h1>
                        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, aliquid tempora ducimus minima ullam praesentium dignissimos, vero dolorum distinctio, omnis. Error, odit tenetur eaque eveniet provident neque, perferendis iste.</h2>
                    </div>
                </div>
            </div>
            <div class="abso_box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel slide article-slide" id="myCarousel">
                            <div class="carousel-inner cont-slider">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="assets/img/image2.jpg">
                                        </div>
                                        <div class="col-md-6">
                                            <h2>The standard lorem ipsum passage</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit pariatur sint harum, quae officiis nemo, dicta iste magni nihil ipsam provident neque minima incidunt, ratione nisi dolor perferendis quis alias.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="assets/img/image3.jpg">
                                        </div>
                                        <div class="col-md-6">
                                            <h2>The standard lorem ipsum passage</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit pariatur sint harum, quae officiis nemo, dicta iste magni nihil ipsam provident neque minima incidunt, ratione nisi dolor perferendis quis alias.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="assets/img/image4.jpg">
                                        </div>
                                        <div class="col-md-6">
                                            <h2>The standard lorem ipsum passage</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit pariatur sint harum, quae officiis nemo, dicta iste magni nihil ipsam provident neque minima incidunt, ratione nisi dolor perferendis quis alias.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ol class="carousel-indicators visible-lg visible-md">
                                <li class="active" data-slide-to="0" data-target="#myCarousel">
                                    <img alt="" title="" src="assets/img/image2.jpg">
                                </li>
                                <li data-slide-to="1" data-target="#myCarousel">
                                    <img alt="" title="" src="assets/img/image3.jpg">
                                </li>
                                <li data-slide-to="2" data-target="#myCarousel">
                                    <img alt="" title="" src="assets/img/image4.jpg">
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="trending_topics">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">trending topics</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="#">
                        <article>
                            <img alt="" title="" src="assets/img/image3.jpg">
                            <div class="black_text">
                                <h2>lorem ipsum passage</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, ipsam dolores persp </p>
                            </div>
                        </article>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <article>
                            <img alt="" title="" src="assets/img/image4.jpg">
                            <div class="black_text">
                                <h2>lorem ipsum passage</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero impedit porro, cumque us </p>
                            </div>
                        </article>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <article>
                            <img alt="" title="" src="assets/img/image5.jpg">
                            <div class="black_text">
                                <h2>lorem ipsum passage</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ipsum voluptatibus posro ta!</p>
                            </div>
                        </article>
                    </a>
                </div>
            </div>
        </div>
        <div class="just_for_gamers">
            <div class="container">
                <h2 class="text-center">JUST FOR GAMERS</h2>
                <div class="black_bg">
                    <div class="row">
                        <a href="#" class="flex__wrap">
                            <div class="image_l">
                                <img src="assets/img/image6.jpg" alt="">
                            </div>
                            <div class="info_r">
                                <h2>The standard <span class="orange_txt">Lorem Ipsum passage</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero eos numquam iste, perspiciatis dolores autem illum et cupiditate sunt ab blanditiis reprehenderit adipisci! Ad accusamus ut, nulla eligendi, at odio.</p>
                            </div>
                        </a>
                        <a href="#" class="flex__wrap text-right">
                            <div class="info_r">
                                <h2>The standard <span class="orange_txt">Lorem Ipsum passage</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, neque beatae saepe eum esse labore rerum ipsam, cupiditate excepturi dolorem voluptas eius incidunt eligendi, pariatur qui veritatis corporis magni. Neque?</p>
                            </div>
                            <div class="image_r">
                                <img src="assets/img/image7.jpg" alt="">
                            </div>
                        </a>
                        <a href="#" class="flex__wrap">
                            <div class="image_l">
                                <img src="assets/img/image8.jpg" alt="">
                            </div>
                            <div class="info_r">
                                <h2>The standard <span class="orange_txt">Lorem Ipsum passage</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusantium reprehenderit pariatur rerum eius quas, molestias nulla illum facilis iure necessitatibus beatae dicta? Minima totam, veniam quo cum hic neque?</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="explore_our_merch">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="explore_our_merch_carousel" class="carousel slide">

                            <ol class="carousel-indicators">
                                <li data-target="#explore_our_merch_carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#explore_our_merch_carousel" data-slide-to="1"></li>
                                <li data-target="#explore_our_merch_carousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                        </div>
                                         <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                        </div>
                                         <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                        </div>
                                         <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                        </div>
                                         <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                        </div>
                                         <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                        </div>
                                         <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                        </div>
                                         <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                        </div>
                                         <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                        </div>
                                         <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <a data-slide="prev" href="#explore_our_merch_carousel" class="left carousel-control">‹</a>
                            <a data-slide="next" href="#explore_our_merch_carousel" class="right carousel-control">›</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="f_item">
                        <h2>accusantium</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio laboriosam earum voluptatum nihil, accusamus eveniet voluptate dolores autem nemo officiis sint molestiae ex in delectus veniam. Explicabo necessitatibus porro nam.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="f_item">
                        <h2>accusantium</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, aut vero pariatur sint tempore officiis cumque nobis veniam inventore consequuntur ducimus harum reiciendis et, ratione minima sed animi, sit quae!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="f_item">
                        <h2>accusantium</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio in doloribus error, quibusdam molestiae. Placeat inventore veniam, eligendi, alias maxime dolore fugit amet numquam possimus id nobis molestias doloremque, aliquam!</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
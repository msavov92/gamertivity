@include('layouts.header')
<header id="profile">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="logo">
                    <img src="assets/img/logo.png" alt="">
                </div>
            </div>
            <div class="col-md-10">
                <div class="profile_setting">
                    <div class="social_profile">
                        <div class="left">
                            <form action="" method="POST">
                                <input type="search" type="profile_search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </form>
                            <a href="#">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="right">
                            <div class="logout_profile">
                                <img src="assets/img/profile_img.png" alt="">
                                <h4>Jessica Christopher <i class="fa fa-chevron-down" aria-hidden="true"></i></h4>
                                <!-- <ul>
                                    <li><a href="#">Setting</a></li>
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">My Messages</a></li>
                                    <li><a href="#">Lock Screen</a></li>
                                    <li><a href="#">Logout</a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="logout"></div>
                </div>
            </div>
        </div>
    </div>
</header>
@include('layouts.footer')
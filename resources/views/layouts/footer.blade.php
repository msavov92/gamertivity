<footer>
    <div class="container">
        @php
            $route = \Request::route()->getName();
        @endphp
        @if ($route === 'home')
        <div class="row">
            <div class="col-md-4">
                <div class="f_item">
                    <h2>ИНФОРМАЦИЯ</h2>
                    <ul>
                        <li>
                            <a href="#">GDPR</a>
                        </li>
                        <li>
                            <a href="#">За нас</a>
                        </li>
                        <li>
                            <a href="#">Промоции</a>
                        </li>
                        <li>
                            <a href="#">Поверителност</a>
                        </li>
                        <li>
                            <a href="#">Условия за ползване</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="f_item">
                    <h2>ОБСЛУЖВАНЕ</h2>
                    <ul>
                        <li>
                            <a href="#">Контакт с нас</a>
                        </li>
                        <li>
                            <a href="#">Връщане на продукти</a>
                        </li>
                        <li>
                            <a href="#">Плащане и доставка</a>
                        </li>
                        <li>
                            <a href="#">Бюлетин Gamertivity</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="f_item">
                    <h2>Последвайте ни</h2>
                    <div class="footer_social_link">
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
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="@if (!Auth::user()) all_rights @endif f_font text-center">
                    <p>&copy; 2020 Gamertivity. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

</footer>


<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
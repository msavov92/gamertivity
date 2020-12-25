@include('layouts.header')
<section id="rank">
    <div class="container-fluid">
        <h2 class="text-center">Класация</h2>
        <div class="row">
            <div class="board">
                <div class="board-inner">
                    <ul class="nav nav-tabs text-center" id="myTab">
                        <li class="active">
                            <a href="#cs" data-toggle="tab" title="CS:GO">
                                <img src="assets/img/tournament/cs2.png" alt="CS:GO Tournament">
                            </a>
                        </li>
                        <li>
                            <a href="#lol" data-toggle="tab" title="League of Legends">
                                <img src="assets/img/tournament/lol.png" alt="League of Legends Tournament">
                            </a>
                        </li>
                        <li>
                            <a href="#rocket" data-toggle="tab" title="Rocket League">
                                <img src="assets/img/tournament/rocket.png" alt="Rocket League Tournament">
                            </a>
                        </li>
                        <li>
                            <a href="#valorant" data-toggle="tab" title="Valorant">
                                <img src="assets/img/tournament/valorant.png" alt="Valorant Tournament">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="cs">
                        <div class="leaderboard">
                            <table id="rankings" class="leaderboard-results" width="100%">
                                <thead>
                                    <tr>
                                        <th>Класация</th>
                                        <th>Отбор</th>
                                        <th>Капитан</th>
                                        <th>Победа</th>
                                        <th>Загуба</th>
                                        <th>Позиция</th>
                                        <th>Точки</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>AFK Lenovo</td>
                                        <td>Мартин Иванов</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>
                                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        </td>
                                        <td>300 т.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>team_toxic</td>
                                        <td>froz3nko</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        </td>
                                        <td>200 т.</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Gamertivity</td>
                                        <td>n0 s0und ;]</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>100 т.</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>The Vampires</td>
                                        <td>Mugabe </td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        </td>
                                        <td>100 т.</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Noshtnite chaiki</td>
                                        <td>2𝓢𝓬𝓻𝓪𝓽𝓬𝓱</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>0 т.</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Power</td>
                                        <td>ttv-jblbg123</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>0 т.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="lol">
                        <div class="leaderboard">
                            <table id="rankings" class="leaderboard-results" width="100%">
                                <thead>
                                    <tr>
                                        <th>Класация</th>
                                        <th>Отбор</th>
                                        <th>Капитан</th>
                                        <th>Победа</th>
                                        <th>Загуба</th>
                                        <th>Позиция</th>
                                        <th>Точки</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Anastas Zmeq</td>
                                        <td>Jackdaniel </td>
                                        <td>5</td>
                                        <td>0</td>
                                        <td>
                                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        </td>
                                        <td>500 т.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>STOMPERS</td>
                                        <td>deimi_GT</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>200 т.</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>LE FRANCE 69</td>
                                        <td>AtomHex</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        </td>
                                        <td>100 т.</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>KuBaLiBrE</td>
                                        <td>SadChill</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>100 т.</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Gamertivity</td>
                                        <td>n0 s0und ;]</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>0 т.</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Breakthrough</td>
                                        <td>Drajeto#6436</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>0 т.</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>BNR - Bedni Naraneni Raci</td>
                                        <td>toti...</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>0 т.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="rocket">
                        <div class="leaderboard">
                            <table id="rankings" class="leaderboard-results" width="100%">
                                <thead>
                                    <tr>
                                        <th>Класация</th>
                                        <th>Отбор</th>
                                        <th>Капитан</th>
                                        <th>Победа</th>
                                        <th>Загуба</th>
                                        <th>Позиция</th>
                                        <th>Точки</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>11</td>
                                        <td>Anastas Zmeq</td>
                                        <td>Jackdaniel </td>
                                        <td>5</td>
                                        <td>0</td>
                                        <td>
                                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        </td>
                                        <td>500 т.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>STOMPERS</td>
                                        <td>deimi_GT</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>200 т.</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>LE FRANCE 69</td>
                                        <td>AtomHex</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        </td>
                                        <td>100 т.</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>KuBaLiBrE</td>
                                        <td>SadChill</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>100 т.</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Gamertivity</td>
                                        <td>n0 s0und ;]</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>0 т.</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Breakthrough</td>
                                        <td>Drajeto#6436</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>0 т.</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>BNR - Bedni Naraneni Raci</td>
                                        <td>toti...</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>0 т.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="valorant">
                        <div class="leaderboard">
                            <table id="rankings" class="leaderboard-results" width="100%">
                                <thead>
                                    <tr>
                                        <th>Класация</th>
                                        <th>Отбор</th>
                                        <th>Капитан</th>
                                        <th>Победа</th>
                                        <th>Загуба</th>
                                        <th>Позиция</th>
                                        <th>Точки</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>11</td>
                                        <td>Anastas Zmeq</td>
                                        <td>Jackdaniel </td>
                                        <td>5</td>
                                        <td>0</td>
                                        <td>
                                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        </td>
                                        <td>500 т.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>STOMPERS</td>
                                        <td>deimi_GT</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>200 т.</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>LE FRANCE 69</td>
                                        <td>AtomHex</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        </td>
                                        <td>100 т.</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>KuBaLiBrE</td>
                                        <td>SadChill</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>100 т.</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Gamertivity</td>
                                        <td>n0 s0und ;]</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>0 т.</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Breakthrough</td>
                                        <td>Drajeto#6436</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>0 т.</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>BNR - Bedni Naraneni Raci</td>
                                        <td>toti...</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>
                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        </td>
                                        <td>0 т.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
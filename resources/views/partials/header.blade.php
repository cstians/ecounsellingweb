<div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications" title="Notifications"></i>
                                        <span class="quantity">4</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 4 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <a href="{{route('answer')}}">
                                                <div class="content">
                                                    <p>You got questions to answer</p>
                                                    <span class="date">May 22, 2019 06:50</span>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <a href="{{route('feedbacks')}}">
                                                <div class="content">
                                                    <p>You have feedbacks to open</p>
                                                    <span class="date">May 22, 2019 09:40</span>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <a href="{{route('stories')}}">
                                                <div class="content">
                                                    <p>You got Success Stories to review</p>
                                                    <span class="date">May 22, 2019 21:14</span>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got 7 Peer Memberships to review</p>
                                                    <span class="date">May 23, 2019 05:14</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="noti__item">
                                        <a href="{{ route('settings') }}">
                                            <i class="zmdi zmdi-settings" title="Account Settings"></i>
                                        </a>
                                            <!-- <span class="quantity">1</span> -->
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/avatar.png" alt="Admin Profile" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/avatar.png" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        {{ Auth::user()->name }}
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->role }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

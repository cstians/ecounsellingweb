
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <!-- <a class="logo" href="index.html"> -->
                                <img src="{{ URL::asset('images/icon/logo.png') }}" alt="Logo" title="Logo" />
                            <!-- </a> -->
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li>
                                <a href="{{ route('home') }}">
                                    <i class="fas fa-tachometer-alt"></i>Overview</a>
                            </li>
                            <li>
                                <a href="{{ route('answer') }}">
                                    <i class="fas fa-chart-bar"></i>Answer Queries</a>
                            </li>
                            <li>
                                <a href="{{ route('feedbacks') }}">
                                    <i class="fas fa-table"></i>Read Feedbacks</a>
                            </li>
                            <li>
                                <a href="{{ route('stories') }}">
                                    <i class="far fa-check-square"></i>Success Stories</a>
                            </li>
                            <li>
                                <a href="{{ route('notifications') }}">
                                    <i class="fas fa-calendar-alt"></i>Push Notification</a>
                            </li>
                            <li>
                                <a href="{{ route('motivation') }}">
                                    <i class="fas fa-map-marker-alt"></i>Motivate</a>
                            </li>

                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Administrative</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="{{ route('addadmin') }}">Add Admin</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('removeadmin') }}">Remove Admin</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('displayadmins') }}">Display all Admins</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->
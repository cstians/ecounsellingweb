        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                        <img src="{{ URL::asset('images/logo.png') }}" alt="Logo" title="Logo" style="height: 80px; width: 80px"/> <span>eCounselling</span>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li class="active">
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
                            <li>
                                <a href="{{ route('displayadmins') }}">
                                    <i class="fas fa-copy"></i>Administrative</a>
                            </li>

                            <li>
                                <a href="{{ route('verifypeer') }}">
                                    <i class="fas fa-copy"></i>Verify Peer</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->
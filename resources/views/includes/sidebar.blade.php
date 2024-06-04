<body class="sidebar-mini ">
    <div class="wrapper">
        <div class="navbar-minimize-fixed">
            <button class="minimize-sidebar btn btn-link btn-just-icon">
                <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
                <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
            </button>
        </div>
        <div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="{{ route('dashboard') }}" class="simple-text logo-mini">
                        RMG
                    </a>
                    <a href="{{ route('dashboard') }}" class="simple-text logo-normal">
                        Rate My Cheer Gym
                    </a>
                </div>
                <ul class="nav">
                    <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#backendExamples"
                            class="{{ request()->is('gym*', 'user*', 'review*') ? 'active' : '' }}">
                            <i class="tim-icons icon-laptop"></i>
                            <p>
                                Backend
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse {{ request()->is('gym*', 'user*', 'review*') ? 'show' : '' }}"
                            id="backendExamples">
                            <ul class="nav">
                                <li class="{{ request()->is('gym') ? 'active' : '' }}">
                                    <a href="{{ route('gym.index') }}">
                                        <span class="sidebar-mini-icon">G</span>
                                        <span class="sidebar-normal"> Gyms </span>
                                    </a>
                                </li>
                                <li class="{{ request()->is('user') ? 'active' : '' }}">
                                    <a href="{{ route('user.index') }}">
                                        <span class="sidebar-mini-icon">U</span>
                                        <span class="sidebar-normal"> Users </span>
                                    </a>
                                </li>
                                <li class="{{ request()->is('review') ? 'active' : '' }}">
                                    <a href="{{ route('review.index') }}">
                                        <span class="sidebar-mini-icon">R</span>
                                        <span class="sidebar-normal"> Reviews </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#frontendExamples"
                            class="{{ request()->is('mainpage', 'terms', 'privacy') ? 'active' : '' }}">
                            <i class="tim-icons icon-tablet-2"></i>
                            <p>
                                Frontend
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse {{ request()->is('mainpage', 'terms', 'privacy') ? 'show' : '' }}"
                            id="frontendExamples">
                            <ul class="nav">
                                <li class="{{ request()->is('mainpage') ? 'active' : '' }}">
                                    <a href="{{ route('mainpage.edit') }}">
                                        <span class="sidebar-mini-icon">C-MP</span>
                                        <span class="sidebar-normal"> Customize Mainpage </span>
                                    </a>
                                </li>
                                <li class="{{ request()->is('terms') ? 'active' : '' }}">
                                    <a href="{{ route('terms.edit') }}">
                                        <span class="sidebar-mini-icon">C-T&C</span>
                                        <span class="sidebar-normal"> Customize Terms & Conditions </span>
                                    </a>
                                </li>
                                <li class="{{ request()->is('privacy') ? 'active' : '' }}">
                                    <a href="{{ route('privacy.edit') }}">
                                        <span class="sidebar-mini-icon">C-PP</span>
                                        <span class="sidebar-normal">Customize Privacy Policy </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

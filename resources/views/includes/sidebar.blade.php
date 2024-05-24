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
                        CT
                    </a>
                    <a href="{{ route('dashboard') }}" class="simple-text logo-normal">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="{{ route('dashboard') }}">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#pagesExamples">
                            <i class="tim-icons icon-laptop"></i>
                            <p>
                                Backend
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="{{ route('gym.index') }}">
                                        <span class="sidebar-mini-icon">G</span>
                                        <span class="sidebar-normal"> Gyms </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.index') }}">
                                        <span class="sidebar-mini-icon">U</span>
                                        <span class="sidebar-normal"> Users </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('review.index') }}">
                                        <span class="sidebar-mini-icon">R</span>
                                        <span class="sidebar-normal"> Reviews </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#componentsExamples">
                            <i class="tim-icons icon-tablet-2"></i>
                            <p>
                                Frontend
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="componentsExamples">
                            <ul class="nav">
                                <li>
                                    <a data-toggle="collapse" aria-expanded="false" href="#multicollapse">
                                        <span class="sidebar-mini-icon">MLT</span>
                                        <span class="sidebar-normal"> Multi Level Collapse
                                            <b class="caret"></b>
                                        </span>
                                    </a>
                                    <div class="collapse" id="multicollapse">
                                        <ul class="nav">
                                            <li>
                                                <a>
                                                    <span class="sidebar-mini-icon">E</span>
                                                    <span class="sidebar-normal"> Example </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="components/buttons.html">
                                        <span class="sidebar-mini-icon">B</span>
                                        <span class="sidebar-normal"> Buttons </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/grid.html">
                                        <span class="sidebar-mini-icon">G</span>
                                        <span class="sidebar-normal"> Grid System </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/panels.html">
                                        <span class="sidebar-mini-icon">P</span>
                                        <span class="sidebar-normal"> Panels </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/sweet-alert.html">
                                        <span class="sidebar-mini-icon">SA</span>
                                        <span class="sidebar-normal"> Sweet Alert </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/notifications.html">
                                        <span class="sidebar-mini-icon">N</span>
                                        <span class="sidebar-normal"> Notifications </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/icons.html">
                                        <span class="sidebar-mini-icon">I</span>
                                        <span class="sidebar-normal"> Icons </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/typography.html">
                                        <span class="sidebar-mini-icon">T</span>
                                        <span class="sidebar-normal"> Typography </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- <li>
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="tim-icons icon-notes"></i>
                            <p>
                                Forms
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="formsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="forms/regular.html">
                                        <span class="sidebar-mini-icon">RF</span>
                                        <span class="sidebar-normal"> Regular Forms </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="forms/extended.html">
                                        <span class="sidebar-mini-icon">EF</span>
                                        <span class="sidebar-normal"> Extended Forms </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="forms/validation.html">
                                        <span class="sidebar-mini-icon">V</span>
                                        <span class="sidebar-normal"> Validation Forms </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="forms/wizard.html">
                                        <span class="sidebar-mini-icon">W</span>
                                        <span class="sidebar-normal"> Wizard </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#tablesExamples">
                            <i class="tim-icons icon-puzzle-10"></i>
                            <p>
                                Tables
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="tables/regular.html">
                                        <span class="sidebar-mini-icon">RT</span>
                                        <span class="sidebar-normal"> Regular Tables </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tables/extended.html">
                                        <span class="sidebar-mini-icon">ET</span>
                                        <span class="sidebar-normal"> Extended Tables </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tables/datatables.net.html">
                                        <span class="sidebar-mini-icon">DT</span>
                                        <span class="sidebar-normal"> DataTables.net </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#mapsExamples">
                            <i class="tim-icons icon-pin"></i>
                            <p>
                                Maps
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="mapsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="maps/google.html">
                                        <span class="sidebar-mini-icon">GM</span>
                                        <span class="sidebar-normal"> Google Maps </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="maps/fullscreen.html">
                                        <span class="sidebar-mini-icon">FM</span>
                                        <span class="sidebar-normal"> Full Screen Map </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="maps/vector.html">
                                        <span class="sidebar-mini-icon">VM</span>
                                        <span class="sidebar-normal"> Vector Map </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="widgets.html">
                            <i class="tim-icons icon-settings"></i>
                            <p>Widgets</p>
                        </a>
                    </li>
                    <li>
                        <a href="charts.html">
                            <i class="tim-icons icon-chart-bar-32"></i>
                            <p>Charts</p>
                        </a>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="tim-icons icon-time-alarm"></i>
                            <p>Calendar</p>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
        <script>
            console.log('Script is running');

            // Get the current URL path
            var currentPath = window.location.pathname;

            console.log('Current Path:', currentPath);

            console.log('Sidebar Links:', sidebarLinks);



            // Select all sidebar links
            var sidebarLinks = document.querySelectorAll('.sidebar-wrapper .nav a');

            // Loop through each sidebar link
            sidebarLinks.forEach(function(link) {

                console.log('Link HREF:', link.getAttribute('href'));
                console.log('Parent Element:', link.parentNode);
                // Check if the link's href matches the current URL path
                if (link.getAttribute('href') === currentPath) {
                    // Add the 'active' class to the parent <li> element
                    link.parentNode.classList.add('active');

                    console.log('Parent Element:', link.parentNode);

                }
            });
        </script>

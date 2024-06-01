<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    RATE MY GYM
                </a>
            </li>
            {{-- <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    About Us
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    Blog
                </a>
            </li> --}}
        </ul>
        <div class="copyright">
            ©
            <script>
                document.write(new Date().getFullYear())
            </script> made with <i class="tim-icons icon-heart-2"></i> Developed by
            <a href="javascript:void(0)" target="_blank">GMG Solutions</a> for a better web.
        </div>
    </div>
</footer>
</div>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
                        <span class="badge filter badge-primary active" data-color="primary"></span>
                        <span class="badge filter badge-info" data-color="blue"></span>
                        <span class="badge filter badge-success" data-color="green"></span>
                        <span class="badge filter badge-warning" data-color="orange"></span>
                        <span class="badge filter badge-danger" data-color="red"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">
                Sidebar Mini
            </li>
            <li class="adjustments-line">
                <div class="togglebutton switch-sidebar-mini">
                    <span class="label-switch">OFF</span>
                    <input type="checkbox" name="checkbox" checked class="bootstrap-switch" data-on-label
                        data-off-label />
                    <span class="label-switch label-right">ON</span>
                </div>
                <div class="togglebutton switch-change-color mt-3">
                    <span class="label-switch">LIGHT MODE</span>
                    <input type="checkbox" name="checkbox" checked class="bootstrap-switch" data-on-label
                        data-off-label />
                    <span class="label-switch label-right">DARK MODE</span>
                </div>
            </li>
            <li class="button-container mt-4">
                <a href="https://demos.creative-tim.com/marketplace/black-dashboard-pro/docs/1.0/getting-started/introduction.html"
                    class="btn btn-default btn-block btn-round">
                    Documentation
                </a>
            </li>
            <li class="header-title">Thank you for 95 shares!</li>
            <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot;
                    45</button>
                <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot;
                    50</button>
                <br>
                <br>
                <a class="github-button" href="https://github.com/creativetimofficial/ct-black-dashboard-pro"
                    data-icon="octicon-star" data-size="large" data-show-count="true"
                    aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
        </ul>
    </div>
</div>

<script src="{{ asset('../assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('../assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('../assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('../assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('../assets/js/plugins/moment.min.js') }}"></script>

<script src="{{ asset('../assets/js/plugins/bootstrap-switch.js') }}"></script>

<script src="{{ asset('../assets/js/plugins/sweetalert2.min.js') }}"></script>

<script src="{{ asset('../assets/js/plugins/jquery.tablesorter.js') }}"></script>

<script src="{{ asset('../assets/js/plugins/jquery.validate.min.js') }}"></script>

<script src="{{ asset('../assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>

<script src="{{ asset('../assets/js/plugins/bootstrap-selectpicker.js') }}"></script>

<script src="{{ asset('../assets/js/plugins/bootstrap-datetimepicker.js') }}"></script>

<script src="{{ asset('../assets/js/plugins/jquery.dataTables.min.js') }}"></script>

<script src="{{ asset('../assets/js/plugins/bootstrap-tagsinput.js') }}"></script>

<script src="{{ asset('../assets/js/plugins/jasny-bootstrap.min.js') }}"></script>

<script src="{{ asset('../assets/js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('../assets/js/plugins/fullcalendar/daygrid.min.js') }}"></script>
<script src="{{ asset('../assets/js/plugins/fullcalendar/timegrid.min.js') }}"></script>
<script src="{{ asset('../assets/js/plugins/fullcalendar/interaction.min.js') }}"></script>

<script src="{{ asset('../assets/js/plugins/jquery-jvectormap.js') }}"></script>

<script src="{{ asset('../assets/js/plugins/nouislider.min.js') }}"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script>

<script src="../assets/js/plugins/chartjs.min.js"></script>

<script src="../assets/js/plugins/bootstrap-notify.js"></script>

<script src="../assets/js/black-dashboard.min3f71.js?v=1.1.1"></script>

<script src="../assets/demo/demo.js"></script>

<script src="../assets/demo/jquery.sharrre.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-46172202-12"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-46172202-12');
</script>
<script>
    $(document).ready(function() {


        $('#facebook').sharrre({
            share: {
                facebook: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            click: function(api, options) {
                api.simulateClick();
                api.openPopup('facebook');
            },
            template: '<i class="fab fa-facebook-f"></i> Facebook',
            url: 'https://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html'
        });

        $('#google').sharrre({
            share: {
                googlePlus: true
            },
            enableCounter: false,
            enableHover: false,
            enableTracking: true,
            click: function(api, options) {
                api.simulateClick();
                api.openPopup('googlePlus');
            },
            template: '<i class="fab fa-google-plus"></i> Google',
            url: 'https://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html'
        });

        $('#twitter').sharrre({
            share: {
                twitter: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            buttons: {
                twitter: {
                    via: 'CreativeTim'
                }
            },
            click: function(api, options) {
                api.simulateClick();
                api.openPopup('twitter');
            },
            template: '<i class="fab fa-twitter"></i> Twitter',
            url: 'https://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html'
        });



        // Facebook Pixel Code Don't Delete
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '../../../../connect.facebook.net/en_US/fbevents.js');

        try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");

        } catch (err) {
            console.log('Facebook Track Error:', err);
        }

    });
</script>
<noscript>
    <img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
</noscript>
<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');
            $main_panel = $('.main-panel');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



            $('.fixed-plugin a').click(function(event) {
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .background-color span').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data', new_color);
                }

                if ($main_panel.length != 0) {
                    $main_panel.attr('data', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data', new_color);
                }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    sidebar_mini_active = false;
                    blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                } else {
                    $('body').addClass('sidebar-mini');
                    sidebar_mini_active = true;
                    blackDashboard.showSidebarMessage('Sidebar mini activated...');
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });

            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (white_color == true) {

                    $('body').addClass('change-background');
                    setTimeout(function() {
                        $('body').removeClass('change-background');
                        $('body').removeClass('white-content');
                    }, 900);
                    white_color = false;
                } else {

                    $('body').addClass('change-background');
                    setTimeout(function() {
                        $('body').removeClass('change-background');
                        $('body').addClass('white-content');
                    }, 900);

                    white_color = true;
                }


            });

            $('.light-badge').click(function() {
                $('body').addClass('white-content');
            });

            $('.dark-badge').click(function() {
                $('body').removeClass('white-content');
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();

    });
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vedd3670a3b1c4e178fdfb0cc912d969e1713874337387"
    integrity="sha512-EzCudv2gYygrCcVhu65FkAxclf3mYM6BCwiGUm6BEuLzSb5ulVhgokzCZED7yMIkzYVg65mxfIBNdNra5ZFNyQ=="
    data-cf-beacon='{"rayId":"88106a907bf99fe6","b":1,"version":"2024.4.1","token":"1b7cbb72744b40c580f8633c6b62637e"}'
    crossorigin="anonymous"></script>
</body>

</html>

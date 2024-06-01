<!DOCTYPE html>
<!-- SSR -->
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="thumbnail" content="https://www.ratemyprofessors.com/build/thumbnail.svg" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <link rel="manifest" href="/build/manifest.json">
    <link rel="stylesheet" type="text/css" href="/static/css/main.1773c5b7.css">

    <!-- Google Optimize Anti-flicker snippet -->
    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
    <script>
        (function(a, s, y, n, c, h, i, d, e) {
            s.className += ' ' + y;
            h.start = 1 * new Date;
            h.end = i = function() {
                s.className = s.className.replace(RegExp(' ?' + y), '')
            };
            (a[n] = a[n] || []).hide = h;
            setTimeout(function() {
                i();
                h.end = null
            }, c);
            h.timeout = c;
        })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
            'OPT-MLW3VTZ': true
        });
    </script>

    <!-- Google Optimize -->
    <script async src="https://www.googleoptimize.com/optimize.js?id=OPT-MLW3VTZ"></script>

    <script src="https://d1be60zb5mdc2d.cloudfront.net/adBundle.js"></script>
<link rel="stylesheet" href="front_assets/css/gymrating.css">
    <link data-react-helmet="true" rel="icon" href="/favicons/favicon-16.png" sizes />
    <link data-react-helmet="true" rel="icon" href="/favicons/favicon-32.png" sizes="32×32" />
    <link data-react-helmet="true" rel="apple-touch-icon" href="/favicons/favicon-57.png" sizes />
    <link data-react-helmet="true" rel="apple-touch-icon" href="/favicons/favicon-48.png" sizes="48×48" />
    <link data-react-helmet="true" rel="apple-touch-icon" href="/favicons/favicon-72.png" sizes="72×72" />
    <link data-react-helmet="true" rel="apple-touch-icon" href="/favicons/favicon-114.png" sizes="114×114" />
    <link data-react-helmet="true" rel="apple-touch-icon" href="/favicons/favicon-152.png" sizes="152×152" />
    <link data-react-helmet="true" rel="apple-touch-icon-precomposed" href="/favicons/favicon-196.png" sizes />
    <link data-react-helmet="true" rel="canonical" href />

     <title data-react-helmet="true">Rate My Gym</title>
    <meta data-react-helmet="true" property="og:image"
        content="https://www.ratemyprofessors.com/static/media/meta-no-thumbs.16c7cf81.png" />
    <meta data-react-helmet="true" property="og:type" content="website" />
    <meta data-react-helmet="true" name="twitter:card" content="summary_large_image" />
    <meta data-react-helmet="true" name="title"
        content="Add a rating for The College of Health Care Professions | Rate My Professors" />
    <meta data-react-helmet="true" name="description"
        content="Add a rating for The College of Health Care Professions" />
    <meta data-react-helmet="true" property="og:url" content />
    <meta data-react-helmet="true" property="og:title"
        content="Add a rating for The College of Health Care Professions | Rate My Professors" />
    <meta data-react-helmet="true" property="og:description"
        content="Add a rating for The College of Health Care Professions" />
    <script src="//cheddar-com.videoplayerhub.com/galleryloader.js" async></script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5HVQ56V');
    </script>

    <!-- BounceX -->
    <script>
        window.googletag = window.googletag || {
            cmd: []
        }
        googletag.cmd.push(function() {
            googletag
                .defineSlot('/21667365449/bounce_x', [1, 1], 'div-gpt-ad-1579103811294-0')
                .addService(googletag.pubads())
            googletag.pubads().enableSingleRequest()
            googletag.enableServices()
        })
    </script>
    <!-- /21667365449/bounce_x -->
    <div id="div-gpt-ad-1579103811294-0" style="width: 1px; height: 1px;">
        <script>
            googletag.cmd.push(function() {
                googletag.display('div-gpt-ad-1579103811294-0')
            })
        </script>
    </div>
    <script id="bx-tag" src="//assets.bounceexchange.com/assets/bounce/iframebuster.js" data-website-id="3905"
        charset="utf-8"></script>

    <!-- Ad Lightning -->
    <script src="https://tagan.adlightning.com/cheddartv/op.js" type="text/javascript"></script>

    
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HVQ56V" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="root">
        <div class="App__StyledApp-aq7j9t-0 kaBGnN">
            <div class="App__Body-aq7j9t-1 bhyGpW">
                <header>
                    <div class="header-container">
                        <h1 class="logo"><a href="{{ route('index') }}">RMG</a></h1>
                        <div class="search-bar">
                            <div class="search-group">
                                <input type="text" placeholder="Enter Your Gym Name">
                            </div>
                        </div>
                        <div class="cta-button">
                            <a href="{{ route('user_pannel') }}" class="menbtn">HEY, SIRAJ</a>
                            <div class="dropdown-content">
                                <a href="{{ route('user_pannel') }}" onclick="showSection('profile')">Profile</a>
                                <a href="{{ route('user_pannel') }}" onclick="showSection('account-settings')">Account
                                    Settings</a>
                                <a href="{{ route('user_pannel') }}" onclick="showSection('ratings')">Your Ratings</a>
                                <a href="{{ route('user_pannel') }}" onclick="showSection('saved-professors')">Saved
                                    Gyms</a>
                                <a href="#">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="__react_component_tooltip te8c4800a-29bf-4f3e-9b1c-104f4833a728 place-bottom type-dark"
                    id="GLOBAL_TOOLTIP" data-id="tooltip">
                </div>
                <header class="StickyHeader__StyledStickyHeaderContainer-sc-19g16mb-0 GQPFJ">
                    <div class="StickyHeader__StyledStickyHeader-sc-19g16mb-1 hyZQlh">
                        <div class="StickyHeader__StyledSecondaryContainerOne-sc-19g16mb-2 cBsYhh">
                            <div class="HeaderDescription__StyledInfoContainer-sc-1lt205f-0 eGhbZq"><span
                                    class="HeaderDescription__StyledCityState-sc-1lt205f-2 cyDJfW">Houston, TX</span>
                                <div class="HeaderDescription__StyledTitleName-sc-1lt205f-1 eNxccF">
                                    <div>
                                        <div class="HeaderDescription__RateProfessorTitle-sc-1lt205f-3 iunMtF">Rate:
                                        </div><span> <!-- -->The College of Health Care Professions</span>
                                    </div>
                                </div>
                                <div class="HeaderDescription__StyledSubTitlesContainer-sc-1lt205f-4 eulOef">
                                    <div class="SchoolTitles__StyledTitle-sc-3rec2n-0 itQwOB"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
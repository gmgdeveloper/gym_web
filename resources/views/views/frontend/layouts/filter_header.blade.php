<!DOCTYPE html>
<!-- SSR -->
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="thumbnail" content="https://www.ratemyprofessors.com/build/thumbnail.svg" />
    <link rel="manifest" href="/build/manifest.json">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="front_assets/css/filter.css">
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
    <meta data-react-helmet="true" name="title" content="John A. Gupton College | Rate My Professors" />
    <meta data-react-helmet="true" name="description"
        content="See what students are saying about John A. Gupton College or leave a rating yourself." />
    <meta data-react-helmet="true" property="og:url" content />
    <meta data-react-helmet="true" property="og:title" content="John A. Gupton College | Rate My Professors" />
    <meta data-react-helmet="true" property="og:description"
        content="See what students are saying about John A. Gupton College or leave a rating yourself." />
    <!-- /21667365449/bounce_x -->
    <div id="div-gpt-ad-1579103811294-0" style="width: 1px; height: 1px;">
        <script>
            googletag.cmd.push(function() {
                googletag.display('div-gpt-ad-1579103811294-0')
            })
        </script>
    </div>
    <style>
        a.rmglogo {
            color: #fff;
            text-decoration: none;
            font-size: 28px;
            padding: 0px 20px 0px 0px;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: black;
            padding: 10px 0;
            width: 100%;
            box-sizing: border-box;
        }

        .logo {
            color: white;
            margin: 0 20px;
        }

        .search-bar {
            display: flex;
            flex: 1;
            justify-content: center;
        }

        .search-group {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 800px;
            gap: 5px;
            padding: 0 20px;
        }

        .search-group input {
            flex: 1;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }

        h1.logo a {
            color: #fff;
            text-decoration: none;
            font-size: 25px;
        }

        .cta-button {
            position: relative;
            display: inline-block;
            margin: 0 20px;
            z-index: 91110000 !important;
        }

        .cta-button .menbtn {
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 20px;
            font-size: 16px;
            text-decoration: none;
        }

        .cta-button button:focus {
            outline: none;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            z-index: 1;
            right: 0;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .cta-button:hover .dropdown-content {
            display: block;
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                align-items: center;
                padding: 25px 0;
            }

            .search-bar {
                width: 100%;
            }

            .search-group {
                flex-direction: column;
                padding: 0 10px;
            }

            .cta-button {
                margin-top: 10px;
            }

            .cta-button .menbtn {
                background: #fff !important;
                color: #000 !important;
            }

            .search-group input {
                width: 100%;
                margin-bottom: 15px;
                margin-top: 15px;
            }
    </style>


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
                <div class="__react_component_tooltip tacadf740-c411-4ad3-8624-b0b666537dc7 place-bottom type-dark"
                    id="GLOBAL_TOOLTIP" data-id="tooltip">
                    <style>
                        .tacadf740-c411-4ad3-8624-b0b666537dc7 {
                            color: #fff;
                            background: #222;
                            border: 1px solid transparent;
                        }

                        .tacadf740-c411-4ad3-8624-b0b666537dc7.place-top {
                            margin-top: -10px;
                        }

                        .tacadf740-c411-4ad3-8624-b0b666537dc7.place-top::before {
                            border-top: 8px solid transparent;
                        }

                        .tacadf740-c411-4ad3-8624-b0b666537dc7.place-top::after {
                            border-left: 8px solid transparent;
                            border-right: 8px solid transparent;
                            bottom: -6px;
                            left: 50%;
                            margin-left: -8px;
                            border-top-color: #222;
                            border-top-style: solid;
                            border-top-width: 6px;
                        }

                        .tacadf740-c411-4ad3-8624-b0b666537dc7.place-bottom {
                            margin-top: 10px;
                        }

                        .tacadf740-c411-4ad3-8624-b0b666537dc7.place-bottom::before {
                            border-bottom: 8px solid transparent;
                        }

                        .tacadf740-c411-4ad3-8624-b0b666537dc7.place-bottom::after {
                            border-left: 8px solid transparent;
                            border-right: 8px solid transparent;
                            top: -6px;
                            left: 50%;
                            margin-left: -8px;
                            border-bottom-color: #222;
                            border-bottom-style: solid;
                            border-bottom-width: 6px;
                        }

                        .tacadf740-c411-4ad3-8624-b0b666537dc7.place-left {
                            margin-left: -10px;
                        }

                        .tacadf740-c411-4ad3-8624-b0b666537dc7.place-left::before {
                            border-left: 8px solid transparent;
                        }

                        .tacadf740-c411-4ad3-8624-b0b666537dc7.place-left::after {
                            border-top: 5px solid transparent;
                            border-bottom: 5px solid transparent;
                            right: -6px;
                            top: 50%;
                            margin-top: -4px;
                            border-left-color: #222;
                            border-left-style: solid;
                            border-left-width: 6px;
                        }

                        .tacadf740-c411-4ad3-8624-b0b666537dc7.place-right {
                            margin-left: 10px;
                        }

                        .tacadf740-c411-4ad3-8624-b0b666537dc7.place-right::before {
                            border-right: 8px solid transparent;
                        }

                        .tacadf740-c411-4ad3-8624-b0b666537dc7.place-right::after {
                            border-top: 5px solid transparent;
                            border-bottom: 5px solid transparent;
                            left: -6px;
                            top: 50%;
                            margin-top: -4px;
                            border-right-color: #222;
                            border-right-style: solid;
                            border-right-width: 6px;
                        }
                    </style>
                </div>
                <header class="StickyHeader__StyledStickyHeaderContainer-sc-19g16mb-0 GQPFJ">
                    <div class="StickyHeader__StyledStickyHeader-sc-19g16mb-1 hyZQlh">
                        <div class="StickyHeader__StyledSecondaryContainerOne-sc-19g16mb-2 cBsYhh">
                            <div class="HeaderDescription__StyledInfoContainer-sc-1lt205f-0 eGhbZq"><span
                                    class="HeaderDescription__StyledCityState-sc-1lt205f-2 cyDJfW">Nashville, TN</span>
                                <div class="HeaderDescription__StyledTitleName-sc-1lt205f-1 eNxccF"><span>John
                                        A. Gupton Gym</span>
                                    <div></div>
                                </div>
                                <div class="HeaderDescription__StyledSubTitlesContainer-sc-1lt205f-4 eulOef">
                                    <div class="SchoolTitles__StyledTitle-sc-3rec2n-0 izsNyq">
                                        <div class="SchoolTitles__LinkContainer-sc-3rec2n-1 fEfAVH"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="HeaderRateButton__SchoolActionButtons-rxcxie-3 haeKCm"><a
                                    class="HeaderRateButton__StyledRateSchoolButton-rxcxie-1 gZMNPm"
                                    id="rate-school-btn" href="{{ route('contact') }}">Rate this Gym</a><a
                                    class="HeaderRateButton__StyledCompareSchoolButton-rxcxie-2 eJwZuj"
                                    id="compare-school-btn" href="{{ route('faq') }}">Compare this Gym</a></div>
                        </div>
                    </div>
                </header>

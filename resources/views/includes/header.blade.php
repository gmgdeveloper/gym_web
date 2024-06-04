<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('../assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('../assets/img/favicon.png') }}">
    <title>
        RATE MY ChEER GYM - DASHBOARD
    </title>


    <link rel="canonical" href="https://www.creative-tim.com/product/black-dashboard" />

    <meta name="keywords"
        content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, black dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, black design, black dashboard bootstrap 4 dashboard">
    <meta name="description"
        content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

    <meta itemprop="name" content="Black Dashboard PRO by Creative Tim">
    <meta itemprop="description"
        content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
    <meta itemprop="image"
        content="{{ asset('../../../../s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg') }}">

    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Black Dashboard PRO by Creative Tim">
    <meta name="twitter:description"
        content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image"
        content="{{ asset('../../../../s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg') }}">

    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Black Dashboard PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html" />
    <meta property="og:image"
        content="{{ asset('../../../../s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg') }}" />
    <meta property="og:description"
        content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
    <meta property="og:site_name" content="Creative Tim" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="{{ asset('../../../../use.fontawesome.com/releases/v5.0.6/css/all.css') }}" rel="stylesheet">

    <link href="{{ asset('../assets/css/nucleo-icons.css') }}" rel="stylesheet" />

    <link href="{{ asset('../assets/css/black-dashboard.min3f71.css?v=1.1.1') }}" rel="stylesheet" />

    <link href="{{ asset('../assets/demo/demo.css') }}" rel="stylesheet" />
</head>
@include('.includes.sidebar')
<div class="main-panel">


    <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-minimize d-inline">
                    <button class="minimize-sidebar btn btn-link btn-just-icon" rel="tooltip"
                        data-original-title="Sidebar toggle" data-placement="right">
                        <i class="tim-icons icon-align-center visible-on-sidebar-regular"></i>
                        <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini"></i>
                    </button>
                </div>
                <div class="navbar-toggle d-inline">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="{{ route('dashboard') }}">Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="search-bar input-group">
                        <button class="btn btn-link" id="search-button" data-toggle="modal"
                            data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                            <span class="d-lg-none d-md-block">Search</span>
                        </button>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <div class="notification d-none d-lg-block d-xl-block"></div>
                            <i class="tim-icons icon-sound-wave"></i>
                            <p class="d-lg-none">
                                Notifications
                            </p>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                            <li class="nav-link">
                                <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
                            </li>
                            <li class="nav-link">
                                <a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
                            </li>
                            <li class="nav-link">
                                <a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in
                                    town</a>
                            </li>
                            <li class="nav-link">
                                <a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
                            </li>
                            <li class="nav-link">
                                <a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <div class="photo">
                                <img src="{{ auth()->user()->profile ? asset(auth()->user()->profile) : asset('assets/img/placeholder.jpg') }}"
                                    alt="Profile Photo">
                            </div>
                            <b class="caret d-none d-lg-block d-xl-block"></b>
                            <p class="d-lg-none">
                                Log out
                            </p>
                        </a>
                        <ul class="dropdown-menu dropdown-navbar">
                            <li class="nav-link">
                                <a href="{{ route('user.profile', auth()->user()->id) }}"
                                    class="nav-item dropdown-item">Profile</a>
                            </li>
                            <li class="nav-link">
                                <a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="nav-link">
                                <a href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="nav-item dropdown-item">Log out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </li>
                    <li class="separator d-lg-none"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog"
        aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

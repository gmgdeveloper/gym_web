@include('..includes.authHeader')

<body class="login-page">

    <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent fixed-top">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle d-inline">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="javascript:void(0)">Login Page</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link text-primary">
                            <i class="tim-icons icon-minimal-left"></i> Register
                        </a>
                    </li>
                    {{-- <li class="nav-item ">
                        <a href="register.html" class="nav-link">
                            <i class="tim-icons icon-laptop"></i> Register
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="login.html" class="nav-link">
                            <i class="tim-icons icon-single-02"></i> Login
                        </a>
                    </li>
                    <li class="nav-item  active ">
                        <a href="pricing.html" class="nav-link">
                            <i class="tim-icons icon-coins"></i> Pricing
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="lock.html" class="nav-link">
                            <i class="tim-icons icon-lock-circle"></i> Lock
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
        aria-hidden="true">
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

    <div class="wrapper wrapper-full-page ">
        <div class="full-page login-page ">

            <div class="content">
                <div class="container">
                    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                        <form class="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="card card-login card-white">
                                <div class="card-header">
                                    <img src="../../assets/img/card-primary.png" alt>
                                    <h1 class="card-title">Log in</h1>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-email-85"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Email" name="email"
                                            value="{{ old('email') }}">
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-lock-circle"></i>
                                            </div>
                                        </div>
                                        <input type="password" placeholder="Password" name="password"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Login</button>
                                    <div class="pull-left">
                                        <h6>
                                            <a href="{{ route('register') }}" class="link footer-link">Create
                                                Account</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @include('..includes.authFooter')

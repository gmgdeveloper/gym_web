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
                        <a href="{{ route('login') }}" class="nav-link text-primary">
                            <i class="tim-icons icon-minimal-left"></i> Login
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
                    <div class="row">
                        {{-- <div class="col-md-5 ml-auto">
                <div class="info-area info-horizontal mt-5">
                    <div class="icon icon-warning">
                        <i class="tim-icons icon-wifi"></i>
                    </div>
                    <div class="description">
                        <h3 class="info-title">Marketing</h3>
                        <p class="description">
                            We've created the marketing campaign of the website. It was a very interesting
                            collaboration.
                        </p>
                    </div>
                </div>
                <div class="info-area info-horizontal">
                    <div class="icon icon-primary">
                        <i class="tim-icons icon-triangle-right-17"></i>
                    </div>
                    <div class="description">
                        <h3 class="info-title">Fully Coded in HTML5</h3>
                        <p class="description">
                            We've developed the website with HTML5 and CSS3. The client has access to the code using
                            GitHub.
                        </p>
                    </div>
                </div>
                <div class="info-area info-horizontal">
                    <div class="icon icon-info">
                        <i class="tim-icons icon-trophy"></i>
                    </div>
                    <div class="description">
                        <h3 class="info-title">Built Audience</h3>
                        <p class="description">
                            There is also a Fully Customizable CMS Admin Dashboard for this product.
                        </p>
                    </div>
                </div>
            </div> --}}
                        <div class="offset-3"></div>
                        <div class="col-md-7 mr-auto">
                            <div class="card card-register card-white">
                                <div class="card-header">
                                    <img class="card-img" src="../../assets/img/card-primary.png" alt="Card image">
                                    <h4 class="card-title">Register</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" method="POST" action="{{ route('register') }}">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-single-02"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Full Name">
                                            @error('name')
                                                <div class="form-group has-danger">
                                                    <input type="text" class="form-control" value="Error">
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-email-85"></i>
                                                </div>
                                            </div>
                                            <input type="email" placeholder="Email" name="email"
                                                class="form-control">
                                            @error('email')
                                                <div class="form-group has-danger">
                                                    <input type="text" class="form-control" value="Error">
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-lock-circle"></i>
                                                </div>
                                            </div>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password">
                                            @error('password')
                                                <div class="form-group has-danger">
                                                    <input type="text" class="form-control" value="Error">
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-lock-circle"></i>
                                                </div>
                                            </div>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                placeholder="Confirm Password">
                                            @error('password_confirmation')
                                                <div class="form-group has-danger">
                                                    <input type="text" class="form-control" value="Error">
                                                </div>
                                            @enderror
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button type="submit"
                                        class="btn btn-primary btn-block btn-round btn-lg">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('..includes.authFooter')

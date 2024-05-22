@include('..includes.authHeader')

<body class="error-page">

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
                <a class="navbar-brand" href="javascript:void(0)">404 Page Not Found</a>
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
                            <i class="tim-icons icon-minimal-left"></i> Back to Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper wrapper-full-page ">
        <div class="full-page error-page ">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 mx-auto">
                            <div class="card card-error card-white">
                                <div class="card-header mx-auto">
                                    <img width="300" class="mx-auto text-center"
                                        src="../../assets/img/card-error.jpg" alt="Card image">
                                </div>
                                <div class="card-footer text-center mx-auto">
                                    <a href="{{ route('login') }}" class="btn btn-primary btn-round btn-lg">Go to
                                        Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

@include('..includes.authFooter')

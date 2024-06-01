<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-react-helmet="true">Rate My Gym</title>
    <link rel="stylesheet" href="front_assets/css/styletwo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
         
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            margin: 0 auto;
        }

        .search-container {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-grow: 1;
            justify-content: center;
        }

        .search-container select,
        .search-container input {
            padding: 5px 10px;
            border-radius: 34px;
            border: 0px ;
        }

        .auth-buttons {
            display: flex;
            gap: 10px;
        }

        .auth-buttons button {
            padding: 5px 15px;
            border-radius: 34px;
        }

        .auth-buttons .login {
            background-color: transparent;
            border: 1px solid #007bff;
            color: #007bff;
        }

        .auth-buttons .signup {
            background-color: #007bff;
            border: 1px solid #007bff;
            color: #fff;
        }

        .modal-login .modal-dialog {
            transform: translateX(100%);
            transition: transform 0.3s ease-out;
        }

        .modal-login.show .modal-dialog {
            transform: translateX(0);
        }

        .modal-content {
            padding: 20px;
            border-radius: 10px;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            border-bottom: none;
            position: relative;
        }

        .modal-header .btn-close {
            position: absolute;
            top: 10px;
            right: 10px;
        }

      
        .modal-body img {
            width: 100px;
            margin-bottom: 20px;
        }

        .modal-body .form-control {
            border-radius: 34px;
            padding: 10px 15px;
        }

        .modal-footer {
            border-top: none;
            justify-content: center;
        }

        .modal-footer .btn {
            border-radius: 34px;
            padding: 10px 20px;
        }
    </style>
</head>

<body>
    <header>
        <div class="navbar">
            <a href="{{ route('index') }}" class="logo">RMG</a>
            <div class="search-container">
                <select class="school-dropdown">
                    <option value="gym">Gyms</option>
                </select>
                <input type="text" placeholder="Your Gym" style="border-radius: 34px; border: 1px solid #ced4da;">
            </div>
            <div class="auth-buttons">
                <button class="login" data-bs-toggle="modal" data-bs-target="#loginModal" style="border:0px ; color:#fff; background:transparent;">Log In</button>
                <button class="signup" data-bs-toggle="modal" data-bs-target="#signupModal" style="border:1px solid #fff; border:none; color:white;">Sign Up</button>
            </div>
        </div>
    </header>

    <!-- Log In Modal -->
    <div class="modal fade modal-login" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                      <a href="{{ route('index') }}" class="logo text-dark" style="justify-content: center;display: flex;">( RMG )</a>
                    <form>
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Log In</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign Up Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="signupName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="signupName" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="signupEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="signupEmail" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="signupPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signupPassword" placeholder="Enter your password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

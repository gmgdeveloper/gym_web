<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-react-helmet="true">Rate My Gym</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="front_assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="social-icons">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
            <a href="#"><i class="fab fa-x"></i></a>
        </div>
         <div class="cta-button">
                            <a href="{{ route('user_pannel') }}" class="menbtn">HEY, SIRAJ</a>
                            <div class="dropdown-content">
                                <a href="{{ route('user_pannel') }}" onclick="showSection('profile')">Profile</a>
                                <a href="{{ route('user_pannel') }}" onclick="showSection('account-settings')">Account Settings</a>
                                <a href="{{ route('user_pannel') }}" onclick="showSection('ratings')">Your Ratings</a>
                                <a href="{{ route('user_pannel') }}" onclick="showSection('saved-professors')">Saved Gyms</a>
                                <a href="#">Logout</a>
                            </div>
                        </div>
        <div class="menu-toggle" id="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
    <div id="dropdown-menu" class="dropdown-menu">
        <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
        <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
        <a href="#"><i class="fab fa-tiktok"></i> TikTok</a>
        <button><a href="{{route('user_pannel')}}" style="color: #fff; text-decoration:none;"> HEY, SIRAJ</a></button>
    </div>


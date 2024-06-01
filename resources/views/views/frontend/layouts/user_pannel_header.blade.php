<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-react-helmet="true">Rate My Gym</title>
    <link rel="stylesheet" href="userassets/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        
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
    padding: 8px;
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
                    <a href="#" onclick="showSection('profile')">Profile</a>
                    <a href="#" onclick="showSection('account-settings')">Account Settings</a>
                    <a href="#" onclick="showSection('ratings')">Your Ratings</a>
                 <a href="#" onclick="showSection('saved-gyms')">Saved Gyms</a>

                    <a href="#">Logout</a>
                </div>
            </div>
        </div>
    </header>
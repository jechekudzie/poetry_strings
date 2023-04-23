<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Webpage</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        /* Set full height for banner */
        .banner {
            height: calc(100vh - 56px);
            background-image: url('https://via.placeholder.com/1500x800');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .navbar {
            background: url('https://via.placeholder.com/1500x800') no-repeat center center fixed;
            background-size: cover;

        }

        /* Center menu items */
        .navbar-nav {
            margin: 0 auto;
            padding-left: 30px;
            z-index: 1;
        }

        @media (min-width: 992px) {
            .navbar-nav {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        }

        /* Add space between menu items */
        .navbar-nav > li:not(:last-child) {
            margin-right: 20px;
        }


        /* "RUTH TSOPOTSA" text */
        .banner-text {
            position: absolute;
            bottom: 100px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 48px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            text-align: center;
            width: 100%;
        }

        /* Center "Buy Now" button */
        .buy-now-btn {
            display: block;
            margin: 0 auto;
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
        }
    </style>
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Ruth</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Where to Buy</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Banner -->
<div class="banner">
    <a href="#" class="btn btn-primary buy-now-btn">Buy Now</a>
    <div class="banner-text">RUTH TSOPOTSA</div>
</div>

<!-- Latest compiled and minified JavaScript -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

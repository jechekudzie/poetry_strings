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
            margin-right: 40px;
        }

        /* "RUTH TSOPOTSA" text */
        .banner-text {
            position: absolute;
            bottom: 100px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 48px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            text-align: center;
            width: 100%;
        }

        .buy-now-container {
            display: flex;
            justify-content: center;
            align-items: center;
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

        /* Book section */
        .book-section {
            padding: 50px 0;
        }

        .book-cover {
            width: 100%;
            max-width: 400px;
            margin-bottom: 20px;
        }

        .book-description {
            font-size: 18px;
            line-height: 1.6;
        }


        .quote-slider {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px 0;
            text-align: center;
            background-color: #f8f9fa;
            border-radius: 5px;
            position: relative;
        }

        .quote-container {
            position: relative;
            min-height: 150px;
        }

        .quote {
            position: absolute;
            top: 0;
            left: 100%;
            opacity: 0;
            transition: all 0.5s;
            width: 100%;
        }

        .quote.active {
            left: 0;
            opacity: 1;
        }

        blockquote {
            font-size: 24px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        cite {
            font-size: 18px;
            font-style: italic;
        }

        .quote-slider-controls {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .prev-quote,
        .next-quote {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 16px;
            margin: 0 5px;
            padding: 5px 10px;
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

<!-- Book section -->
<section class="book-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://via.placeholder.com/400x600" alt="Book Cover" class="book-cover">
            </div>
            <div class="col-md-6">
                <h2>About the Book</h2>
                <p class="book-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque euismod bibendum velit, ac facilisis purus ullamcorper id. Integer at metus vel dolor malesuada facilisis. Etiam ac ligula elit. Duis faucibus odio sed augue rhoncus, in venenatis odio feugiat. Nullam hendrerit orci et augue suscipit vestibulum.
                </p>
                <p class="book-description">
                    Curabitur eget augue ut justo lacinia facilisis. Vivamus egestas mauris et dolor blandit, in iaculis tellus blandit. Donec commodo ullamcorper lacus id volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vivamus eu urna id nulla tristique fermentum.
                </p>
                <div class="buy-now-container">
                    <a href="#" class="btn btn-primary btn-block">Buy Now</a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Quotes section -->
<section class="quote-slider">
    <div class="quote-container">
        <div class="quote active">
            <blockquote>
                "This is the first quote. It's really inspiring!"
                <cite>- Author 1</cite>
            </blockquote>
        </div>
        <div class="quote">
            <blockquote>
                "This is the second quote. It's equally inspiring!"
                <cite>- Author 2</cite>
            </blockquote>
        </div>
        <div class="quote">
            <blockquote>
                "This is the third quote. It's also quite inspiring!"
                <cite>- Author 3</cite>
            </blockquote>
        </div>
    </div>
    <div class="quote-slider-controls">
        <button class="prev-quote">Prev</button>
        <button class="next-quote">Next</button>
    </div>
</section>



<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    const prevQuoteBtn = document.querySelector(".prev-quote");
    const nextQuoteBtn = document.querySelector(".next-quote");
    const quotes = document.querySelectorAll(".quote");

    let currentQuoteIndex = 0;
    const slideInterval = 3000; // Interval in milliseconds (3 seconds)

    function updateQuoteDisplay() {
        quotes.forEach((quote, index) => {
            if (index === currentQuoteIndex) {
                quote.style.left = '0';
                quote.style.opacity = '1';
            } else if (index < currentQuoteIndex) {
                quote.style.left = '-100%';
                quote.style.opacity = '0';
            } else {
                quote.style.left = '100%';
                quote.style.opacity = '0';
            }
        });
    }

    function nextQuote() {
        currentQuoteIndex++;
        if (currentQuoteIndex >= quotes.length) {
            currentQuoteIndex = 0;
        }
        updateQuoteDisplay();
    }

    prevQuoteBtn.addEventListener("click", () => {
        currentQuoteIndex--;
        if (currentQuoteIndex < 0) {
            currentQuoteIndex = quotes.length - 1;
        }
        updateQuoteDisplay();
    });

    nextQuoteBtn.addEventListener("click", nextQuote);

    // Set an interval to auto-slide the quotes
    setInterval(nextQuote, slideInterval);


</script>
</body>

</html>


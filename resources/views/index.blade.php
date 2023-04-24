<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
{{--
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Poetry Strings - Oasis In Crisis</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('styles.css')}}">

</head>

<body>
<div class="page-content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        <a href="#" class="btn btn-primary buy-now-btn" data-bs-toggle="modal" data-bs-target="#select-book-modal">Buy
            Now</a>
        <div class="banner-text">RUTH TSOPOTSA</div>
    </div>

    <!-- Book section -->
    <section class="book-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID"
                                allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>The Book</h2>
                    <p class="book-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque euismod bibendum velit, ac
                        facilisis purus ullamcorper id...
                    </p>
                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#bookDescriptionModal">Read
                        More
                    </button>

                    <hr/>
                    <h2>The Author</h2>
                    <p class="book-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque euismod bibendum velit, ac
                        facilisis purus ullamcorper id...
                    </p>
                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#authorDescriptionModal">
                        Read More
                    </button>

                    <div class="buy-now-container mt-3">
                        <a href="#" class="btn btn-primary btn-block">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Description Modal -->
    <div class="modal fade" id="bookDescriptionModal" tabindex="-1" role="dialog" aria-labelledby="bookDescriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookDescriptionModalLabel">The Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Complete book description goes here.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Author Description Modal -->
    <div class="modal fade" id="authorDescriptionModal" tabindex="-1" role="dialog" aria-labelledby="authorDescriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="authorDescriptionModalLabel">The Author</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Complete author description goes here.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Book poem episode -->
    <section class="episode-section">
        <div class="container">
            <div class="episode-section-title">Oasis In Crisis</div>
            <div class="row">
                <!-- Replace the videoId with the actual YouTube video ID -->
                <!-- Repeat this block for each episode (12 times total) -->
                <div class="col-md-4 col-sm-6">
                    <div class="episode">
                        <div class="episode-title">Episode 1</div>
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoId" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="episode-caption">Episode 1: The Beginning</div>
                    </div>
                </div>
                <!-- End of the episode block -->
                <!-- Repeat this block for each episode (12 times total) -->
                <div class="col-md-4 col-sm-6">
                    <div class="episode">
                        <div class="episode-title">Episode 2</div>
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoId" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="episode-caption">Episode 2: The Second</div>
                    </div>
                </div>
                <!-- End of the episode block -->
                <!-- Repeat this block for each episode (12 times total) -->
                <div class="col-md-4 col-sm-6">
                    <div class="episode">
                        <div class="episode-title">Episode 3</div>
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoId" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="episode-caption">Episode 3: The Third</div>
                    </div>
                </div>
                <!-- End of the episode block -->

            </div>
        </div>
    </section>
</div>
<footer style="padding-top: 100px;" class="footer bg-dark text-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0">&copy; {{date('Y')}} Poetry Strings. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    <li class="list-inline-item"><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Development Version (with helpful console warnings) -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<!-- Production Version (minified and optimized for performance) -->
{{--<script src="https://cdn.jsdelivr.net/npm/vue"></script>--}}


<!-- Development Version (with helpful console warnings) -->
<script src="https://cdn.jsdelivr.net/npm/vuex"></script>
<!-- Production Version (minified and optimized for performance) -->
{{--
<script src="https://cdn.jsdelivr.net/npm/vuex/dist/vuex.min.js"></script>
--}}


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


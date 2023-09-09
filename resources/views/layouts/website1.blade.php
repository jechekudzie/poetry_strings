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
    <link href="{{url('custom.css')}}" rel="stylesheet">
    <style type="text/css">
        a.disabled {
            pointer-events: none;
            color: gray;
            text-decoration: none;
            cursor: default;
        }
    </style>
    @livewireStyles
</head>

<body>

<nav style="background-color: #132839;" class="navbar navbar-expand-lg navbar-light  fixed-top">
    <div class="container">
        <a class="navbar-brand mr-auto" href="{{url('/')}}">
            <img src="{{ url('/card/poetry-strings-logo-white-rgb-2000px@144ppi.png') }}" class="img-fluid">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" href="{{url('/')}}">About Ruth</a>
                </li>
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" href="{{url('/')}}">Poems</a>
                </li>
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" href="{{url('/')}}">Where to Buy</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


{{--
<nav class="navbar navbar-expand-lg navbar-light {{ request()->path() != '/' ? 'bg-light' : '' }} sticky-top" >
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Ruth</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#poems">Poems</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#wheretobuy">Where to Buy</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
--}}

<!-- Mobile menu -->
<div class="mobile-menu">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About Ruth</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Where to Buy</a>
        </li>
    </ul>
</div>


<div class="page-content">
    <!-- Navbar -->
    @yield('content')

    <livewire:order/>
</div>
<footer style="padding-top: 100px;" class="footer <!--bg-dark--> text-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0">&copy; {{date('Y')}} Poetry Strings. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-white text-md-end">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a style="color: white;" href="#">Privacy Policy</a></li>
                    <li class="list-inline-item"><a style="color: white;" href="#">Terms of Use</a></li>
                    <li class="list-inline-item"><a style="color: white;" href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@stack('scripts')

<script type="text/javascript">

    $(function () {
        $(".modal").on("shown.bs.modal", function () {
            var curModal;
            curModal = this;
            $(".modal").each(function () {
                if (this !== curModal) {
                    $(this).modal("hide");
                }
            });
        });
    });

</script>

@livewireScripts
<script>
    $(document).ready(function () {
        $('.navbar-toggler').click(function () {
            $('.mobile-menu').toggleClass('show');
        });
    });

</script>
</body>

</html>


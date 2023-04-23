<!doctype html>
<html class="no-js" lang="en">
<head>
    <!-- title -->
    <title>POETRY STRINGS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="author" content="ThemeZaa">
    <!-- description -->
    <meta name="description" content="">
    <!-- keywords -->
    <meta name="keywords"
          content="">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.png')}}">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootsnav.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-icons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme-vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}"/>

    @livewireStyles
</head>
<body>
<div class="sidebar-wrapper mobile-height">
    <!-- start navigation -->
    <nav class="navbar no-margin-bottom bootsnav alt-font bg-white sidebar-nav sidebar-nav-style-1 navbar-expand-lg">
        <!-- start logo -->
        <div class="col-12 sidenav-header">
            <div class="logo-holder">
                <a href="{{'/'}}" class="d-inline-block logo"><img alt="Pofo" src="{{asset('images/logo.png')}}"
                                                                   data-at2x="{{asset('images/logo@2x.png')}}"/></a>
            </div>
            <!-- end logo -->
            <button class="navbar-toggler mobile-toggle" type="button" id="mobileToggleSidenav">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="col-12 px-0">
            <div id="navbar-menu" class="collapse navbar-collapse no-padding">
                <ul class="nav navbar-nav navbar-left-sidebar font-weight-500">
                    <li class="dropdown">
                        <a href="{{url('/')}}" title="Home">Home<i class="fas fa-angle-right pull-right"></i></a>

                    </li>
                    <li>
                        <div class="side-left-menu-close close-side"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12 position-absolute top-auto bottom-0 left-0 w-100 padding-20px-bottom sm-padding-15px-bottom">
            <div class="footer-holder">
                <form action="search-result.html" method="post" class="navbar-form no-padding search-box">
                    <div class="input-group add-on">
                        <input name="text" id="text" data-email="required" type="text"
                               placeholder="Enter your keywords..."
                               class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-default search-button" type="submit"><i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <div
                    class="icon-social-medium margin-eleven-bottom padding-eight-top sm-padding-15px-top sm-margin-15px-bottom">
                    <a href="https://www.facebook.com/" target="_blank" class="text-link-extra-dark-gray"><i
                            class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/" target="_blank" class="text-link-extra-dark-gray"><i
                            class="fab fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://dribbble.com/" target="_blank" class="text-link-extra-dark-gray"><i
                            class="fab fa-dribbble" aria-hidden="true"></i></a>
                    <a href="https://plus.google.com" target="_blank" class="text-link-extra-dark-gray"><i
                            class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                </div>
                <div
                    class="text-medium-gray text-extra-small border-top border-color-extra-light-gray padding-twelve-top sm-padding-15px-top">
                    &COPY; {{date('Y')}} POETRY STRINGS. All rights reserved
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->

    @yield('content')

    <livewire:order/>
    <!-- start footer -->
    <footer class="footer-center-logo bg-light-gray padding-five-tb sm-padding-30px-tb">
        <div class="container">
            <div class="row align-items-center">
                <!-- start copyright -->
                <div class="col-lg-4 col-md-5 text-small text-center alt-font sm-margin-15px-bottom">
                    &COPY; {{date('Y')}} POETRY STRINGS is Powered by <a href="http://www.themezaa.com" target="_blank"
                                                                         title="ThemeZaa">Solutions ToolBox</a>.
                </div>
                <!-- end copyright -->
                <!-- start logo -->
                <div class="col-lg-4 col-md-2 text-center sm-margin-10px-bottom">
                    <a href="{{'/'}}"><img class="footer-logo" src="images/logo.png" data-at2x="images/logo@2x.png"
                                           alt="Pofo"></a>
                </div>
                <!-- end logo -->
                <!-- start social media -->
                <div class="col-lg-4 col-md-5 text-center">
                    <span class="alt-font text-small margin-20px-right md-margin-15px-right">On social networks</span>
                    <div class="social-icon-style-8 d-inline-block align-middle">
                        <ul class="small-icon mb-0">
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                        class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a class="twitter" href="https://twitter.com/" target="_blank"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a class="google" href="https://plus.google.com" target="_blank"><i
                                        class="fab fa-google-plus-g"></i></a></li>
                            <li><a class="instagram" href="https://instagram.com/" target="_blank"><i
                                        class="fab fa-instagram me-0" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end social media -->
            </div>
        </div>
    </footer>
    <!-- end footer -->
</div>
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
<!-- end scroll to top  -->
<!-- javascript -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootsnav.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.nav.js')}}"></script>
<script type="text/javascript" src="{{asset('js/hamburger-menu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/theme-vendors.min.js')}}"></script>
<!-- setting -->
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

<script type="text/javascript">

   /* $('#order').modal('hide')

    $('#order').on('hidden.bs.modal', function () {
        // Load up a new modal...
        $('#details').modal('show')
    })

    $('#details').modal('hide')

    $('#details').on('hidden.bs.modal', function () {
        // Load up a new modal...
        $('#order').modal('show')
    })*/

   $(function() {
       return $(".modal").on("show.bs.modal", function() {
           var curModal;
           curModal = this;
           $(".modal").each(function() {
               if (this !== curModal) {
                   $(this).modal("hide");
               }
           });
       });
   });
</script>

@livewireScripts
</body>
</html>

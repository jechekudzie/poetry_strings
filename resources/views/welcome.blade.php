@extends('layouts.coming_soon')

@section('content')

        <!-- start hero with parallax section -->
        <section class="wow animate__fadeIn p-0 parallax sm-background-image-center"
                 data-parallax-background-ratio="0.5"
                 style="background-image:url('https://via.placeholder.com/1920x1080');">
            <div class="container full-screen position-relative">
                <div class="row m-0 h-100 align-items-center">
                    <div
                        class="col-12 col-xl-8 col-md-10 offset-xl-4 offset-md-1 text-center text-lg-start bg-white-opacity padding-six-all lg-padding-eight-all">
                        <div
                            class="alt-font text-extra-dark-gray text-uppercase font-weight-700 letter-spacing-minus-2 title-large">
                            OASIS IN CRISIS
                        </div>
                        <div
                            class="separator-line-horrizontal-full w-100 margin-35px-tb md-margin-25px-tb sm-margin-20px-tb bg-extra-dark-gray"></div>
                        <span
                            class="text-dark-gray text-extra-large font-weight-300 margin-35px-bottom d-block md-margin-25px-bottom sm-margin-15px-bottom">
                        Introductory line comes here.
                    </span>
                        <a href="#"  style="margin: 10px;" data-bs-toggle="modal" data-bs-target="#order" class="btn btn-dark-gray btn-medium">Order
                            Now</a>
                        <a style="margin: 10px;" href="#" target="_blank" class="btn btn-dark-gray btn-medium">Bid
                            Now</a>
                        <a style="margin: 10px;" href="#" target="_blank" class="btn btn-dark-gray btn-medium">Buy
                            Now</a>
                    </div>
                    <div class="down-section text-center">
                        <a href="#about_book" class="section-link up-down-ani"><i
                                class="ti-mouse icon-small bounce text-deep-pink"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero banner with parallax section -->
        <!-- start feature box section  -->
        <section id="about_book"
                 class="wow animate__fadeIn bg-extra-dark-gray wow animate__fadeIn lg-padding-two-lr sm-no-padding-lr">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- start feature box item -->
                    <div
                        class="col-12 col-lg-12 col-md-12 col-sm-12 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeIn">
                        <div class="d-flex align-items-center margin-15px-bottom alt-font">
                            <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">01.</h3>
                            <span
                                class="text-large line-height-22 padding-20px-left padding-20px-left w-100">Creativity.<br> Discover talent.</span>
                        </div>
                        <p class="w-90 lg-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the
                            industry.</p>
                        <div
                            class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
                    </div>

                </div>
            </div>
        </section>

        <section id="about_author"
                 class="wow animate__fadeIn wow animate__fadeIn lg-padding-two-lr sm-no-padding-lr">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- start feature box item -->
                    <div
                        class="col-12 col-lg-12 col-md-12 col-sm-12 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeIn">
                        <div class="d-flex align-items-center margin-15px-bottom alt-font">
                            <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">01.</h3>
                            <span
                                class="text-large line-height-22 padding-20px-left padding-20px-left w-100">Creativity.<br> Discover talent.</span>
                        </div>
                        <p class="w-90 lg-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the
                            industry.</p>
                        <div
                            class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end feature box section -->

        <!-- start blog section -->
        <section class="wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div
                        class="col-12 col-sm-8 col-xl-6 col-xxl-5 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">
                            Latest
                            POEMS</h5>
                        <p class="mx-auto mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                           </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 blog-content">
                        <ul class="blog-clean blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start post item -->
                            <li class="grid-item wow animate__fadeInUp">
                                <div
                                    class="blog-post blog-post-style2 margin-50px-bottom md-margin-30px-bottom sm-margin-20px-bottom xs-margin-10px-bottom">
                                    <div
                                        class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-15px-bottom">
                                        <a href="blog-post-layout-01.html">
                                            <img src="https://via.placeholder.com/750x500" alt="">
                                        </a>
                                    </div>
                                    <div class="post-details">
                                        <a href="blog-post-layout-01.html"
                                           class="post-title text-medium text-extra-dark-gray w-90 d-block lg-w-100">I
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            </a>
                                        <div
                                            class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                        <div class="author">
                                            <img src="https://via.placeholder.com/149x149" alt=""
                                                 class="rounded-circle">
                                            <span
                                                class="text-medium-gray text-uppercase text-extra-small padding-15px-left d-inline-block">by <a
                                                    href="blog-clean.html" class="text-medium-gray">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;13 May 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item wow animate__fadeInUp">
                                <div
                                    class="blog-post blog-post-style2 margin-50px-bottom md-margin-30px-bottom sm-margin-20px-bottom xs-margin-10px-bottom">
                                    <div
                                        class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-15px-bottom">
                                        <a href="blog-post-layout-01.html">
                                            <img src="https://via.placeholder.com/750x500" alt="">
                                        </a>
                                    </div>
                                    <div class="post-details">
                                        <a href="blog-post-layout-01.html"
                                           class="post-title text-medium text-extra-dark-gray w-90 d-block lg-w-100">I
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            </a>
                                        <div
                                            class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                        <div class="author">
                                            <img src="https://via.placeholder.com/149x149" alt=""
                                                 class="rounded-circle">
                                            <span
                                                class="text-medium-gray text-uppercase text-extra-small padding-15px-left d-inline-block">by <a
                                                    href="blog-clean.html" class="text-medium-gray">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;13 May 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item wow animate__fadeInUp">
                                <div
                                    class="blog-post blog-post-style2 margin-50px-bottom md-margin-30px-bottom sm-margin-20px-bottom xs-margin-10px-bottom">
                                    <div
                                        class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-15px-bottom">
                                        <a href="blog-post-layout-01.html">
                                            <img src="https://via.placeholder.com/750x500" alt="">
                                        </a>
                                    </div>
                                    <div class="post-details">
                                        <a href="blog-post-layout-01.html"
                                           class="post-title text-medium text-extra-dark-gray w-90 d-block lg-w-100">I
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            </a>
                                        <div
                                            class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                        <div class="author">
                                            <img src="https://via.placeholder.com/149x149" alt=""
                                                 class="rounded-circle">
                                            <span
                                                class="text-medium-gray text-uppercase text-extra-small padding-15px-left d-inline-block">by <a
                                                    href="blog-clean.html" class="text-medium-gray">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;13 May 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item wow animate__fadeInUp">
                                <div
                                    class="blog-post blog-post-style2 margin-50px-bottom md-margin-30px-bottom sm-margin-20px-bottom xs-margin-10px-bottom">
                                    <div
                                        class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-15px-bottom">
                                        <a href="blog-post-layout-01.html">
                                            <img src="https://via.placeholder.com/750x500" alt="">
                                        </a>
                                    </div>
                                    <div class="post-details">
                                        <a href="blog-post-layout-01.html"
                                           class="post-title text-medium text-extra-dark-gray w-90 d-block lg-w-100">I
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            </a>
                                        <div
                                            class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                        <div class="author">
                                            <img src="https://via.placeholder.com/149x149" alt=""
                                                 class="rounded-circle">
                                            <span
                                                class="text-medium-gray text-uppercase text-extra-small padding-15px-left d-inline-block">by <a
                                                    href="blog-clean.html" class="text-medium-gray">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;13 May 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end post item -->

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blog section -->

@stop

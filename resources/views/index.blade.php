@extends('layouts.website')

@section('content')
    <!-- Banner -->

    <div class="banner">
        <button class="btn btn-primary buy-now-btn" data-toggle="modal" data-target="#order">Buy Now</button>
        <div class="banner-text">RUTH TSOPOTSA</div>
    </div>

    <!-- Book section -->
    <section class="book-section">
        <div class="container">
            <div class="row">
                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>{{session('message')}}</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                            tidy.</p>
                    </div>
                @endif

                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID"
                                allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>The Book</h2>
                    <p class="book-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque euismod bibendum
                        velit, ac
                        facilisis purus ullamcorper id...
                    </p>
                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#bookDescriptionModal">
                        Read
                        More
                    </button>

                    <hr/>
                    <h2>The Author</h2>
                    <p class="book-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque euismod bibendum
                        velit, ac
                        facilisis purus ullamcorper id...
                    </p>
                    <button class="btn btn-outline-primary" data-toggle="modal"
                            data-target="#authorDescriptionModal">
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
    <div class="modal fade" id="bookDescriptionModal" tabindex="-1" role="dialog"
         aria-labelledby="bookDescriptionModalLabel" aria-hidden="true">
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
    <div class="modal fade" id="authorDescriptionModal" tabindex="-1" role="dialog"
         aria-labelledby="authorDescriptionModalLabel" aria-hidden="true">
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
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoId"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <div class="episode-caption">Episode 1: The Beginning</div>
                    </div>
                </div>
                <!-- End of the episode block -->
                <!-- Repeat this block for each episode (12 times total) -->
                <div class="col-md-4 col-sm-6">
                    <div class="episode">
                        <div class="episode-title">Episode 2</div>
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoId"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <div class="episode-caption">Episode 2: The Second</div>
                    </div>
                </div>
                <!-- End of the episode block -->
                <!-- Repeat this block for each episode (12 times total) -->
                <div class="col-md-4 col-sm-6">
                    <div class="episode">
                        <div class="episode-title">Episode 3</div>
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoId"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <div class="episode-caption">Episode 3: The Third</div>
                    </div>
                </div>
                <!-- End of the episode block -->

            </div>
        </div>
    </section>

@endsection

@push('scripts')
    {{-- <script src="https://unpkg.com/vue@next"></script>
     <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
     <script src="{{ asset('js/app.js') }}"></script>--}}
@endpush




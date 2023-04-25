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
            @if(session('message'))
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Payment update!</h4>

                    <hr>
                    <p>{{session('message')}}</p>
                </div>
            @endif
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

    <div style="padding-top: 20px;" class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-5">Oasis In Crisis</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" controls>
                            <source src="{{ url('/video/Poetry Reading 1 - Perfectly Imperfect.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center">Perfectly Imperfect</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" controls>
                            <source src="{{url('/video/Poetry Reading 2 - Mouse in my House .mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center">Mouse in my House</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" controls>
                            <source src="{{ url('video/Reading 3 - Silence.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center">Silence</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')
    {{-- <script src="https://unpkg.com/vue@next"></script>
     <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
     <script src="{{ asset('js/app.js') }}"></script>--}}
@endpush




@extends('layouts.website')

@section('content')
    <!-- Banner -->

    <div class="banner">
        <button class="btn buy-now-btn" data-toggle="modal" data-target="#order">Buy Now</button>
        {{--
                <div class="banner-text">RUTH TSOPOTSA</div>
        --}}
    </div>

    <!-- Book section -->
    <section id="about" class="book-section">
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
                    <img style="width: 500px;" src="{{url('/card/07.jpeg.jpg')}}">
                </div>

                <div class="col-md-6">
                    <h2>The Book</h2>
                    <p class="book-description">
                        Oasis in Crisis is Dr. Ruth Tsopotsa’s stunning debut poetry anthology. In this collection, Dr.
                        Tsopotsa masterfully explores the themes of life, death, love, and loss, all within the context
                        of the global COVID-19 pandemic that has affected us all.......
                        <br/>

                    </p>
                    <button class="btn btn-outline btn-outline-dark btn-block" data-toggle="modal"
                            data-target="#bookDescriptionModal">Read More
                    </button>

                    <hr/>
                    <h2>The Author</h2>
                    <p class="book-description">
                        Dr. Ruth Tsopotsa is a multi-talented author, medical doctor, singer/songwriter, poet, and
                        modern lady, a mom in her mid-30s.........
                        <br/>
                    </p>
                    <button class="btn btn-outline btn-outline-dark btn-block" data-toggle="modal"
                            data-target="#authorDescriptionModal">
                        Read More
                    </button>

                    <div class="buy-now-container mt-3">
                        <button style="background-color: #C35428;color:white;" class="btn btn-block" data-toggle="modal"
                                data-target="#order">Buy Now
                        </button>
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
                        Oasis in Crisis is Dr. Ruth Tsopotsa’s stunning debut poetry anthology. In this collection, Dr.
                        Tsopotsa masterfully explores the themes of life, death, love, and loss, all within the context
                        of the global COVID-19 pandemic that has affected us all.
                        <br/>
                        <br/>
                        Throughout the collection, Dr. Tsopotsa's lyrical and poignant verses beautifully capture the
                        raw emotions and experiences of navigating life during a time of crisis. Her words offer a
                        soothing balm to the soul, providing a space for readers to reflect, heal, and find hope amidst
                        the chaos.
                        <br/>
                        <br/>
                        With its stunning imagery and heartfelt emotion, Oasis in Crisis is a work that speaks directly
                        to the human experience. From the opening lines to the final verse, Dr. Tsopotsa's words offer a
                        powerful reminder of the resilience of the human spirit and the power of hope in even the
                        darkest of times.
                        <br/>
                        <br/>
                        This book is a must-read for anyone looking for inspiration and comfort during difficult times.
                        Whether you are a poetry lover or simply looking for a moment of solace, Oasis in Crisis is a
                        work that is sure to touch your heart and leave you feeling uplifted and inspired.
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
                        Dr. Ruth Tsopotsa is a multi-talented author, medical doctor, singer/songwriter, poet, and
                        modern lady, a mom in her mid-30s.
                        <br/>
                        <br/>
                        Born and raised in a modest, Christian family, Dr. Tsopotsa developed a passion for music and
                        creative writing from a young age. She pursued her academic interests and became a medical
                        doctor, specializing in a field that allows her to make a difference in people's lives every
                        day. She is a family enthusiast who believes in the importance of balancing parenting and career
                        while leading a healthy lifestyle.
                        <br/>
                        <br/>
                        In addition to her career as a medical doctor, Dr. Tsopotsa is also an accomplished
                        singer/songwriter and poet. Her music and poetry reflect her life experiences, passions, and
                        beliefs, and she uses her art to inspire others and spread positivity.
                        <br/>
                        <br/>
                        Dr. Tsopotsa is also a philanthropist who believes in giving back to her community. She is
                        involved in various charitable organizations and initiatives, and she uses her resources to make
                        a positive impact on the world. She is a role model for aspiring authors, medical professionals,
                        and creative individuals everywhere, and her work and achievements continue to inspire others.

                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="poems" style="padding-top: 20px;" class="container">
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
                            <source src="{{ url('/video/Poetry Reading 1 - Perfectly Imperfect.mp4') }}"
                                    type="video/mp4">
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




<div>
    <!-- Modal -->

    <div class="modal fade" id="order" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div style="background-color: #C35428;color:white;" class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Choose Copy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">{{ $book->title }}
                                        - {{$book->getSoftCopy()->name}}</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">${{ $book->getSoftCopyPrice() }}</h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        {{-- <li>{{ $book->author }}</li>--}}

                                    </ul>
                                    <a style="background-color: #132839;color:white;" href="{{url('/checkout/'.$book->getSoftCopy()->id)}}" class="btn btn-default btn-block <!--btn-outline-primary--> disabled">Choose Copy (coming soon)</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">{{ $book->title }}
                                        - {{$book->getHardCopy()->name}}</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">${{ $book->getHardCopyPrice() }}</h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        {{-- <li>{{ $book->author }}</li>--}}

                                    </ul>
                                    <a style="background-color: #132839;color:white;" href="{{url('/checkout/'.$book->getHardCopy()->id)}}" class="btn btn-block ">Choose Copy</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


</div>

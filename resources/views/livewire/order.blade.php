<div>
    <!-- Modal -->
    <div class="modal fade" id="order" tabindex="-1" aria-labelledby="order" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="text-transform: capitalize;">oasis in crisis:
                        order now {{$copy}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row align-items-center justify-content-center">
                        <!-- start pricing item -->
                        <div
                            class="col-12 col-lg-4 col-md-8 text-center pricing-box-style1 md-margin-30px-bottom wow animate__fadeInUp"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="pricing-box border border-color-extra-light-gray">
                                <div
                                    class="padding-55px-all bg-very-light-gray md-padding-30px-all sm-pading-40px-all">
                                    <!-- start pricing title -->

                                    <!-- end pricing title -->
                                    <!-- start pricing price -->
                                    <div class="pricing-price">
                                        <span class="alt-font text-extra-dark-gray font-weight-600 text-uppercase">Paper Bag</span>
                                        <h4 class="text-extra-dark-gray alt-font font-weight-600 mb-0">$250</h4>
                                    </div>
                                    <!-- end pricing price -->
                                </div>
                                <!-- start pricing features -->
                                <div
                                    class="padding-45px-all pricing-features md-padding-20px-all sm-padding-30px-all">
                                    <ul class="list-style-11">
                                        <li>1 Hard copy</li>
                                        <li>1 Downloadable EPub</li>
                                        <li>1 Downloadable Epub</li>
                                        <li>1 audio book</li>
                                    </ul>
                                    <!-- start pricing action -->
                                    <div class="pricing-action margin-35px-top md-no-margin-top">
                                        <a href="#" wire:click.prevent="choose_copy(1)" data-bs-toggle="modal"
                                           data-bs-target="#details" data-bs-dismiss="modal"
                                           class="btn btn-dark-gray btn-small text-extra-small">Choose copy
                                        </a>
                                    </div>
                                    <!-- end pricing action -->
                                </div>
                                <!-- end pricing features -->
                            </div>
                        </div>
                        <!-- end pricing item -->
                        <!-- start pricing item -->
                        <div
                            class="col-12 col-lg-4 col-md-8 text-center pricing-box-style1 md-margin-30px-bottom wow animate__fadeInUp"
                            data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="pricing-box border border-color-extra-light-gray">
                                <div class="padding-55px-all bg-very-light-gray md-padding-30px-all sm-pading-40px-all">

                                    <!-- start pricing price -->
                                    <div class="pricing-price">
                                        <span class="alt-font text-extra-dark-gray font-weight-600 text-uppercase">Soft Copy</span>
                                        <h4 class="text-extra-dark-gray alt-font font-weight-600 mb-0">$350</h4>
                                    </div>
                                    <!-- end pricing price -->
                                </div>
                                <!-- start pricing features -->
                                <div
                                    class="padding-45px-all pricing-features md-padding-20px-all sm-padding-30px-all">
                                    <ul class="list-style-11">
                                        <li style="text-decoration: line-through">1 Hard copy</li>
                                        <li>1 Downloadable EPub</li>
                                        <li>1 Downloadable PDF</li>
                                        <li style="text-decoration: line-through">1 audio book</li>
                                    </ul>
                                    <div class="pricing-action margin-35px-top md-no-margin-top">
                                        <a href="#" wire:click.prevent="choose_copy(2)" data-bs-toggle="modal"
                                           data-bs-target="#details"
                                           class="btn btn-dark-gray btn-small text-extra-small">Choose copy
                                        </a>
                                    </div>
                                    <!-- end pricing action -->
                                </div>
                                <!-- end pricing features -->
                            </div>
                        </div>
                        <!-- end pricing item -->
                        <!-- start pricing item -->
                        <div class="col-12 col-lg-4 col-md-8 text-center pricing-box-style1 wow animate__fadeInUp"
                             data-wow-delay="0.4s"
                             style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <div class="pricing-box border border-color-extra-light-gray">
                                <div
                                    class="padding-55px-all bg-very-light-gray md-padding-30px-all sm-pading-40px-all">
                                    <!-- end pricing title -->
                                    <!-- start pricing price -->
                                    <div class="pricing-price">
                                        <span class="alt-font text-extra-dark-gray font-weight-600 text-uppercase">Audio Book</span>
                                        <h4 class="text-extra-dark-gray alt-font font-weight-600 mb-0">$450</h4>
                                    </div>
                                    <!-- end pricing price -->
                                </div>
                                <!-- start pricing features -->
                                <div
                                    class="padding-45px-all pricing-features md-padding-20px-all sm-padding-30px-all">
                                    <ul class="list-style-11">
                                        <li style="text-decoration: line-through">1 Hard copy</li>
                                        <li style="text-decoration: line-through">1 Downloadable EPub</li>
                                        <li style="text-decoration: line-through">1 Downloadable Epub</li>
                                        <li>1 audio book</li>
                                    </ul>
                                    <!-- start pricing action -->
                                    <div class="pricing-action margin-35px-top md-no-margin-top">
                                        <a href="#" wire:click.prevent="choose_copy(2)" data-bs-toggle="modal"
                                           data-bs-target="#details"
                                           class="btn btn-dark-gray btn-small text-extra-small">Choose copy
                                        </a>
                                    </div>
                                    <!-- end pricing action -->
                                </div>
                                <!-- end pricing features -->
                            </div>
                        </div>
                        <!-- end pricing item -->
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-medium btn-transparent-dark-gray btn-rounded lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto"
                            data-bs-dismiss="modal">Close
                    </button>
                    {{--
                                    <button type="button" class="btn btn-medium btn-transparent-dark-gray btn-rounded lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto">Next</button>
                    --}}
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="details" tabindex="-1" aria-labelledby="details" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="text-transform: capitalize;">oasis in crisis:
                        order now {{$copy}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form id="project-contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-results d-none"></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" name="name" id="name" placeholder="Name *"
                                       class="small-input required">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="tel" name="phone" id="phone" placeholder="Phone" class="small-input">
                            </div>
                            <div class="col-12 col-md-12">
                                <input type="email" name="email" id="email" placeholder="E-mail *"
                                       class="small-input required">
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="select-style big-select">
                                    <select name="budget" class="small-input mb-0">
                                        <option value="">Select Country</option>
                                        <option value="$500 - $1000">country 1</option>
                                        <option value="$500 - $1000">country 2</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="select-style big-select">
                                    <select name="budget" class="small-input mb-0">
                                        <option value="">Select city</option>
                                        <option value="$500 - $1000">city 1</option>
                                        <option value="$500 - $1000">city 2</option>

                                    </select>
                                </div>
                            </div>


                            @if($copy == 1)
                                <div class="col-12 col-md-4">
                                    <div class="select-style big-select">
                                        <select name="budget" class="small-input mb-0">
                                            <option value="">Select book store</option>
                                            <option value="$500 - $1000">Book store 1</option>
                                            <option value="$500 - $1000">Book store 2</option>


                                        </select>
                                    </div>
                                </div>
                            @endif

                            <div class="col-md-12 col-lg-12 order-md-last">
                                <h6 class="text-extra-dark-gray alt-font font-weight-600">Your Cart
                                    <span class="badge bg-primary rounded-pill">3</span>
                                </h6>
                                <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <h6 class="my-0">Oasis in crisis</h6>
                                            <small class="text-muted">Brief description</small>
                                        </div>
                                        <span class="text-muted">$12</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Total (USD)</span>
                                        <strong>12</strong>
                                    </li>
                                </ul>

                            </div>
                            {{--<div class="col-12">
                                <textarea name="comment" id="comment" placeholder="enter Specific instructions" rows="6"
                                          class="big-textarea"></textarea>
                            </div>--}}

                        </div>
                    </form>


                </div>
                <div class="modal-footer">

                    <button type="button"
                            class="btn btn-medium btn-dark-gray btn-rounded lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto"
                            data-bs-dismiss="modal">Close
                    </button>
                    <button type="button"
                            class="btn btn-medium btn-transparent-dark-gray btn-rounded lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto"
                            data-bs-toggle="modal"
                            data-bs-target="#order">Previous
                    </button>
                    <button type="button"
                            class="btn btn-medium btn-transparent-dark-gray btn-rounded lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>

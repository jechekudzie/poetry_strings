@extends('layouts.website')

@section('content')

    <style>
        .breadcrumb {
            font-size: 18px;
            font-weight: 500;
            padding: 10px 0;
        }

        .breadcrumb a {
            color: #007bff;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        .breadcrumb .breadcrumb-item.active {
            color: #6c757d;
        }
    </style>

    <!-- Banner -->


    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent pl-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
        <div class="py-5 text-center">
            <h2>Checkout form</h2>
            <p class="lead">Instruction goes here</p>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill" id="quantity-badge">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{$book->title}} - {{$bookType->name}}</h6>
                            <small class="text-muted">{{$book->description}}</small>
                        </div>
                        <span id="price" class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong id="total_price"> </strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing Details</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{url('/purchase/'.$bookType->id)}}" method="post" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="" value=""
                                   required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Phone number</label>
                            <input type="number" class="form-control" name="phone" id="lastName" placeholder="" value=""
                                   required>
                            <div class="invalid-feedback">
                                Valid last phone number is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="address">Quantity</label>
                            <input type="number" name="quantity" id="quantity" min="1" class="form-control" value="1"
                                   required>
                            <div class="invalid-feedback">
                                Please enter your quantity .
                            </div>
                        </div>

                        <div class="col-md-5 mb-3">
                            <label for="country">Book Store</label>
                            <select class="custom-select d-block w-100" name="book_store_id" id="book_store_id"
                                    required>
                                <option value="">Choose...</option>
                                @if($bookType->name == 'Softcopy')
                                    @foreach($bookStores->whereIn('id', [1, 2])->all() as $bookstore)
                                        <option value="{{$bookstore->id}}">{{$bookstore->name}}</option>
                                    @endforeach
                                @else
                                    @foreach ($bookStores->whereNotIn('id', [1, 2])->all() as $bookstore)
                                        <option value="{{ $bookstore->id }}">
                                            {{ $bookstore->name }} -> {{ $bookstore->address }}
                                            @if ($bookStoreStock = $bookstore->bookStoreStocks()->where('book_type_id', $bookType->id)->exists())
                                                @if ($bookStoreStock)
                                                    ({{ $bookstore->bookStoreStocks()->where('book_type_id', $bookType->id)->first()->quantity }}
                                                    in stock)
                                                @else
                                                    <p>Out of stock</p>
                                                @endif
                                            @else
                                                <p>(available on Epub, PDF)</p>
                                            @endif
                                        </option>
                                    @endforeach
                                @endif

                            </select>
                            <div class="invalid-feedback">
                                Please select a valid book store or pick up location.
                            </div>
                        </div>
                    </div>


                    <hr class="mb-4">

                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked
                                   required>
                            <label class="custom-control-label" for="credit">PayNow (online)</label>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                </form>
            </div>
        </div>

    </div>

@endsection

@push('scripts')
    <script>

        $(document).ready(function () {
            // Get the price from Laravel and set it to the price span
            var price = "{{ $bookType->price }}";
            $("#price").text("$" + price);

            // Get the default quantity and update the badge
            var defaultQuantity = $("#quantity").val();
            $("#quantity-badge").text(defaultQuantity);

            // Calculate the total price based on the default quantity and price, and display it
            var totalPrice = (price * defaultQuantity).toFixed(2);
            $("#total_price").text("$" + totalPrice);

            // Listen to changes on the quantity input and update the badge and total price
            $("#quantity").on("change", function () {
                var quantity = $(this).val();
                $("#quantity-badge").text(quantity);
                var totalPrice = (price * quantity).toFixed(2);
                $("#total_price").text("$" + totalPrice);
            });
        });


    </script>
@endpush




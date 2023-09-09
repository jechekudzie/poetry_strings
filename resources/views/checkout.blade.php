@extends('layouts.website1')

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
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
        <div class="py-5 text-center">
            <h2>Checkout form</h2>
<!--            <p class="lead">Instruction goes here</p>-->
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
                        <span id="currencySelected"></span>
                        <strong id="total_price"></strong>
                    </li>
                </ul>

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
                            <label for="email">Email <span class="text-muted"></span></label>
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="you@example.com" required>
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

                        <div class="col-md-12 mb-3">
                            <label for="country">Book Store</label>
                            <select class="custom-select d-block w-100" name="book_store_id" id="book_store_id"
                                    required>
                                <option value="">Choose...</option>
                                @if($bookType->name == 'Softcopy')
                                    @foreach($bookStores->whereIn('id', [5])->all() as $bookstore)
                                        <option
                                            value="{{$bookstore->id}}">{{$bookstore->name.' (Store: '.$bookstore->address}}
                                            )
                                        </option>
                                        <p>Available store at this Location: {{$bookstore}}</p>
                                    @endforeach
                                @else
                                    @foreach ($bookStores->whereNotIn('id', [5])->all() as $bookstore)
                                        <option value="{{ $bookstore->id }}">
                                            {{$bookstore->name.' (Location:'.$bookstore->address}})
                                            @if ($bookStoreStock = $bookstore->bookStoreStocks()->where('book_type_id', $bookType->id)->exists())
                                                @if ($bookStoreStock)
                                                    <p>
                                                        ({{ $bookstore->bookStoreStocks()->where('book_type_id', $bookType->id)->first()->quantity }}
                                                        in stock)
                                                    </p>
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
                    <h4 class="mb-3">Currency</h4>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="currency_zwl" name="currency" type="radio" class="custom-control-input" value="ZWL">
                            <label class="custom-control-label" for="currency_zwl">ZWL</label>
                        </div>
                    </div>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="currency_usd" name="currency" type="radio" class="custom-control-input" value="USD" checked>
                            <label class="custom-control-label" for="currency_usd">USD</label>
                        </div>
                    </div>


                    <h4 class="mb-3">Payment</h4>
                    @foreach($paymentMethods as $paymentMethod)
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="{{$paymentMethod->name}}" name="payment_method_id" type="radio" class="custom-control-input"
                                       value="{{$paymentMethod->id}}" {{$loop->first ? 'disabled' : ''}}>
                                <label class="custom-control-label" for="{{$paymentMethod->name}}">{{$paymentMethod->name}}</label>
                            </div>
                        </div>
                    @endforeach

                    <input type="hidden" id="exchange_rate" name="exchange_rate" value="{{$exchangeRate->rate}}">

                    <hr class="mb-4">
                    <button style="background-color: #132839;color: white;" class="btn btn-lg btn-block" type="submit">
                        Continue to checkout
                    </button>
                </form>
            </div>
        </div>

    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            // Get the price and exchange rate from Laravel and set it to the price and exchange rate spans
            var price = "{{ $bookType->price }}";
            var exchangeRate = "{{ $exchangeRate->rate }}";
            $("#price").text("$" + price);
            $("#exchange_rate").text(exchangeRate);

            // Get the default quantity and currency selection, and update the badge and currency display
            var defaultQuantity = $("#quantity").val();
            var defaultCurrency = $("input[name='currency']:checked").val();
            $("#quantity-badge").text(defaultQuantity);
            $("#currencySelected").text(defaultCurrency);

            // Calculate the total price based on the default quantity, price, and exchange rate, and display it
            var exchangeRateAdjustedPrice = defaultCurrency === "ZWL" ? price * exchangeRate : price;
            var totalPrice = exchangeRateAdjustedPrice * parseFloat(defaultQuantity);
            var formattedPrice = defaultCurrency === "ZWL" ? "ZWL " + totalPrice.toFixed(2) : "$" + totalPrice.toFixed(2);
            $("#total_price").text(formattedPrice);

            // Listen to changes on the quantity input and currency selection, and update the badge and total price
            $("#quantity, input[name='currency']").on("change", function () {
                var quantity = parseFloat($("#quantity").val());
                var currency = $("input[name='currency']:checked").val();
                $("#quantity-badge").text(quantity);
                $("#currencySelected").text(currency);
                var exchangeRateAdjustedPrice = currency === "ZWL" ? price * exchangeRate : price;
                var totalPrice = exchangeRateAdjustedPrice * quantity;
                var formattedPrice = currency === "ZWL" ? "ZWL " + totalPrice.toFixed(2) : "$" + totalPrice.toFixed(2);
                $("#total_price").text(formattedPrice);
            });
        });



    </script>
@endpush




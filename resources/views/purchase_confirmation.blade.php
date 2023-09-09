@extends('layouts.website1')
@section('content')
    <div class="container">
        <div style="margin-top: 20vh;margin-bottom: 20vh;" class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="text-center">Book Purchase Confirmation</h1>
                <hr>
                <p>Hello {{$purchase->name}},</p>
                <p>Thank you for your purchase of {{$purchase->book->title}} from our {{$purchase->bookStore->name}}
                    BookStore!</p>
                <div class="card">
                    <div class="card-header">
                        Purchase Details
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tbody>
                            <tr>
                                <th scope="row">Purchase Order Number</th>
                                <td>{{$purchase->purchase_order_number}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Price</th>
                                <td>{{$purchase->price}} {{$purchase->currency}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Quantity</th>
                                <td>{{$purchase->quantity}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Total</th>
                                <td>{{$purchase->amount}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Payment Method</th>
                                <td>{{$purchase->paymentMethod->name}}</td>
                            </tr>

                            </tbody>
                        </table>
                        <a  href="@if($purchase->book->pdf_file !=null){{url($purchase->book->pdf_file)}}@endif"
                           style="background-color: #007E87;color: white;" class="btn btn-lg btn-block disabled" target="_blank">Download
                            PDF
                        </a>
                        <a  href="@if($purchase->book->epub_file != null){{url($purchase->book->epub_file)}}@endif"
                           style="background-color: #F4BD91;color: white;"
                           class="btn btn-lg btn-block disabled" target="_blank">Download Epub
                        </a>
                        <a href="{{url('/card/card.pdf')}}" style="background-color: #547543;color: white;"
                           class="btn btn-lg btn-block" target="_blank">Download Gift Card</a>
                    </div>
                </div>

                <p>Thank you for choosing our service, we hope you enjoy your purchase!</p>

            </div>
        </div>
    </div>
@endsection
<!-- Bootstrap 4.5 JS -->


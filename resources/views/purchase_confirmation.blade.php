@extends('layouts.website')
@section('content')
    <div style="padding-top: 20px;" class="container">
        <div class="row">
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
                        <h5 class="card-title">Special title treatment</h5>
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
                                <td>{{$purchase->payment->paymentMethod->name}}</td>
                            </tr>

                            </tbody>
                        </table>
                        <a href="{{url($purchase->book->pdf_file)}}" class="btn btn-primary" target="_blank">Download PDF</a>
                        <a href="{{url($purchase->book->epub_file)}}" class="btn btn-primary" target="_blank">Download Epub</a>
                        <a href="{{url('/card/card.pdf')}}" class="btn btn-primary" target="_blank">Download Gift Card</a>
                    </div>
                </div>

                <p>Thank you for choosing our service, we hope you enjoy your purchase!</p>

            </div>
        </div>
    </div>
@endsection
<!-- Bootstrap 4.5 JS -->


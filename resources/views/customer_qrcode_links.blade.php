@extends('layouts.website1')
@section('content')

    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
    <section style="margin-top: 100px; margin-bottom: 100px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <div class="wow animate__fadeInLeft">
                        <div align="center">
<!--                            <img src="{{ url('/card/poetry-strings-logo-white-rgb-2000px@144ppi.png') }}" width="200">-->
                        </div>
                        {{--@foreach($customer->customer_qrcode_links as $customer_qrcode_link)
                        <div class="col-12 text-center">
                            <a style="width: 200px;" href="{{$customer_qrcode_link->value}}" target="_blank" class="btn btn-topbar btn-light-gray btn-border margin-20px-top">{{$customer_qrcode_link->link->name}}</a>
                        </div>
                        @endforeach--}}

                        <table>
                            <tr>
                                <td>Title</td>
                                <td>Footprints of the Sun</td>
                            </tr>
                            <tr>
                                <td>Author</td>
                                <td>Ruth Tsopotsa</td>
                            </tr>
                            <tr>
                                <td>Barcode</td>
                                <td>6003789052028</td>
                            </tr>
                            <tr>
                                <td>ISBN</td>
                                <td>9781779330529</td>
                            </tr>
                            <tr>
                                <td>Website</td>
                                <td><a href="https://poetrystrings.com" target="_blank">poetrystrings.com</a></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><a href="mailto:oasis@poetrystrings.com">oasis@poetrystrings.com</a></td>
                            </tr>
                            <tr>
                                <td>Instagram</td>
                                <td><a href="https://www.instagram.com/poetrystrings/" target="_blank">@poetrystrings</a></td>
                            </tr>
                            <tr>
                                <td>Facebook</td>
                                <td><a href="https://www.facebook.com/doc.tsoo" target="_blank">Poetry Strings</a></td>
                            </tr>
                            <tr>
                                <td>Youtube</td>
                                <td><a href="https://www.youtube.com/@poetrystrings" target="_blank">Poetry Strings</a></td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

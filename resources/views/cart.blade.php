<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Product Catalog with Cart and Discount Logic Project Overview</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
</head>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Cart page</h2>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Sub total</th>
                            <th>Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $total = 0; @endphp
                        @foreach(session('cart') as $id => $product)
                            @php
                                $sub_total = $product['price'] * $product['quantity'];
                                $total + = $sub_total;
                            @endphp
                            <tr>
                                <th>{{$product['name']}}</th>
                                <td>{{$product['price']}}</td>
                                <td>{{$product['quantity']}}</td>
                                <td>{{$sub_total}}</td>
                                <td><a href="" class="btn btn-danger btn-sm">X</a></td>
                            </tr>
                        @endforeach
                        <tfoot>
                        <tr class="table-borderless">
                            <td colspan="3"><a class="btn btn-warning" href="{{route('home')}}">Continue Shopping</a>
                            </td>
                            <td>Total amount</td>
                        </tr>
                        </tfoot>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

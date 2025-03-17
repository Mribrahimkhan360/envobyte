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
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Products page</h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4>{{$product['name']}}</h4>
                    <input type="hidden" class="product_id" value="1">
                    <div class="d-flex">
                        <p>Price</p>
                        <p>$ {{$product['price']}}</p>
                    </div>
                    <a href="{{ route('add-cart', [$product['id']]) }}"  class="add-to-cart-btn btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>

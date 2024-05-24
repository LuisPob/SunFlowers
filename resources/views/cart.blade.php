@extends('layouts.appStore')

@section('content')
<br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNFLOWER</title>
    <link rel="stylesheet" href="path/to/your/css/file.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body, .container {
            background-image: url('/img/rosawelcome.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
        }

        .container {
            padding: 20px;
            border-radius: 10px;
            margin-top: 80px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .row {
            flex: 1;
            width: 100%;
        }

        .card {
            flex: 0 0 auto;
        }

        .products-container {
            max-height: 400px;
            overflow-y: auto;
            padding-right: 15px; /* to avoid scrollbar overlap */
            margin-right: -15px; /* to compensate for padding */
        }
    </style>
</head>
<body>
    <div class="container">
        @if(session()->has('success_msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>{{ session()->get('success_msg') }}</strong></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(session()->has('alert_msg'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>{{ session()->get('alert_msg') }}</strong></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>{{ $error }}</strong></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <br>
                @if(\Cart::getTotalQuantity() > 0)
                <h4>{{ \Cart::getTotalQuantity() }} Producto(s) en el carrito</h4><br>
                @else
                <h4>No hay productos en el carro</h4><br>
                <a href="{{ route('shop') }}" class="btn btn-dark" style="background-color: #A67b5b;">Continuar en la tienda</a>
                @endif

                <div class="products-container">
                    @foreach($cartCollection as $item)
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="/images/{{ $item->attributes->image }}" class="img-thumbnail" width="200" height="200">
                        </div>
                        <div class="col-lg-5">
                            <p>
                                <b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name }}</a></b><br>
                                <b>Precio: </b>${{ $item->price }}<br>
                                <b>Sub total: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex flex-row">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group d-flex flex-row">
                                        <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                        <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}" id="quantity" name="quantity" style="width: 70px; margin-right: 10px;">
                                        <button class="btn btn-secondary btn-sm" style="margin-right: 10px; color: black; background-color: #fbf451;"><i class="fa fa-edit"></i></button>
                                    </div>
                                </form>
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <button class="btn btn-sm" style="background-color: red; border-color: red; color: black; margin-right: 10px;"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
                @if(count($cartCollection) > 0)
                <form action="{{ route('cart.clear') }}" method="POST" class="mt-3">
                    {{ csrf_field() }}
                    <button class="btn btn-md" style="background-color: red; border-color: red; color: black;">Borrar Carrito</button>
                </form>
                @endif
            </div>
            @if(count($cartCollection) > 0)
            <div class="col-lg-5">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Total: </b>${{ \Cart::getTotal() }}</li>
                    </ul>
                </div>
                <br><a href="{{ route('shop') }}" class="btn btn-dark" style="background-color: #A67b5b; color: black;">Continuar en la tienda</a>
                <a href="/checkout" class="btn btn-success" style="background-color: #a5eea0; color: black;">Proceder al Checkout</a>
            </div>
            @endif
        </div>
        <br><br>
    </div>
</body>
</html>


@endsection
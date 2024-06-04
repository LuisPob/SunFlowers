@if(count(\Cart::getContent()) > 0)
@foreach(\Cart::getContent() as $item)
<li class="mb-2">
    <a class="dropdown-item border-radius-md" href="javascript:;">
        <div class="d-flex py-1">
            <div class="my-auto ">
                <img src="{{ asset('storage/images/'.$item->attributes->image) }}" class="avatar avatar-sm bg-gradient-dark  me-3 ">
            </div>
            <div class="d-flex flex-column justify-content-center p-2">
                <h6 class="text-sm font-weight-normal mb-1">
                    <span class="font-weight-bold"><b>{{$item->name}}</b></span>
                </h6>
                <p class="text-xs text-secondary mb-0">
                    <small>Cantidad: {{$item->quantity}}</small>
                </p>
            </div>
            <div class="d-flex justify-content-end">
                <p class="d-flex align-items-center">${{ \Cart::get($item->id)->getPriceSum() }}</p>
            </div>

        </div>
    </a>
</li>
@endforeach
<br>
<li class="list-group-item">
    <div class="d-flex flex-row">
        <div class="col-9">
            <b>Total: </b>${{ \Cart::getTotal() }}
        </div>
        <div class="col-3 justify-content-end">
            <form action="{{ route('cart.clear') }}" method="POST">
                {{ csrf_field() }}
                <button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
            </form>
        </div>
    </div>
</li>
<br>
<form action="{{ url('api/iniciar_compra') }}" method="POST">
    <div class="row" style="margin: 0px;">
        <a class="btn btn-dark btn-sm btn-block" href="{{ route('cart.index') }}">
            CARRITO <i class="fa fa-arrow-right"></i>
        </a>
        @csrf
        <input type="hidden" name="total_amount" value="{{ \Cart::getTotal() }}">
        <button type="submit" class="btn btn-dark btn-sm btn-block">
            IR A PAGAR <i class="fa fa-arrow-right"></i>
        </button>
</form>
</div>
@else
<li class="list-group-item">Tu carrito esta vacío</li>
@endif
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('template_title')
Productos
@endsection

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Productos'])
<!-- <div class="container-fluid py-4"></div> -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Productos') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('products.create') }}" style="color: white;" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Nuevo producto') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>Imagen</th>

                                    <th>Nombre</th>
                                    <!-- <th>Nombre corto</th> -->
                                    <!-- <th>Detalles</th> -->
                                    <th>Precio</th>
                                    <!-- <th>Costo de envio</th> -->
                                    <!-- <th>Descripción</th> -->
                                    <!-- <th>Id categoria</th> -->
                                    <!-- <th>Brand Id</th> -->
                                    <th>Acciones</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td><img src="{{ asset('storage/images/' . $product->image_path) }}" alt="{{ $product->name }}" width="90" class="img-fluid rounded"></td>
                                    <td>{{ $product->name }}</td>
                                    <!-- <td>{{ $product->slug }}</td> -->
                                    <!-- <td>{{ $product->details }}</td> -->
                                    <td>{{ $product->price }}</td>
                                    <!-- <td>{{ $product->shipping_cost }}</td> -->
                                    <!-- <td>{{ $product->description }}</td> -->
                                    <!-- <td>{{ $product->category_id }}</td> -->
                                    <!-- <td>{{ $product->brand_id }}</td> -->
                                    <!-- <td>{{ $product->image_path }}</td> -->

                                    <td>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " style="color: white;" href="{{ route('products.show',$product->id) }}"><i class="fa fa-fw fa-eye"></i> Más detalles</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $products->links() !!}
        </div>
    </div>
</div>
@endsection
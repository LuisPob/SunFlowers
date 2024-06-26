@extends('layouts.app')

@section('template_title')
    Tipo Producto
@endsection

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tipo Producto'])
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo Producto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipo-productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <span style="color: black;">{{ __('Create New') }}</span> 
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Slug</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipoProductos as $tipoProducto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tipoProducto->name }}</td>
											<td>{{ $tipoProducto->slug }}</td>

                                            <td>
                                                <form action="{{ route('tipo-productos.destroy',$tipoProducto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipo-productos.show',$tipoProducto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipo-productos.edit',$tipoProducto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tipoProductos->links() !!}
            </div>
        </div>
    </div>
@endsection

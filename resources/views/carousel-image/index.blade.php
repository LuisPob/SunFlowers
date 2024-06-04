@extends('layouts.app')

@section('template_title')
Carousel Image
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card mt-3">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Carousel Image') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('carousel-image.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Create New') }}
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

                    <div class="row">
                        
                        @foreach ($carouselImages as $carouselImage)
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="{{ asset('storage/carousel/' . $carouselImage->image_path) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <form action="{{ route('carousel-image.edit', $carouselImage) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="image">Cambiar Imagen</label>
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                            @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
                                    </form>
                                    <form action="{{ route('carousel-image.destroy', $carouselImage) }}" method="POST" class="mt-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Image Path</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($carouselImages as $carouselImage)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $carouselImage->image_path }}</td>

                                    <td>
                                        <form action="{{ route('carousel-image.destroy',$carouselImage->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('carousel-image.show',$carouselImage->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('carousel-image.edit',$carouselImage->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
            {!! $carouselImages->links() !!}
        </div>
    </div>
</div>
@endsection
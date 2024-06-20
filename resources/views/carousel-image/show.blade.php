@extends('layouts.app')

@section('template_title')
    {{ $carouselImage->name ?? 'Show Carousel Image' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Carousel Image</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carousel-image.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Image Path:</strong>
                            {{ $carouselImage->image_path }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

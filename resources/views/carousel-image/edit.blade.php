@extends('layouts.app')

@section('template_title')
    Update Carousel Image
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Carousel Image</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('carousel-image.update', $carouselImage->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('carousel-image.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

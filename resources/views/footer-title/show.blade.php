@extends('layouts.app')

@section('template_title')
    {{ $footerTitle->name ?? 'Show Footer Title' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Footer Title</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('footer-titles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $footerTitle->title }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('template_title')
    {{ $footerContent->name ?? 'Show Footer Content' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Footer Content</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('footer-contents.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $footerContent->content }}
                        </div>
                        <div class="form-group">
                            <strong>Footer Title Id:</strong>
                            {{ $footerContent->footer_title_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

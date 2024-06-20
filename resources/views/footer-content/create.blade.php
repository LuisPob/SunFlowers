@extends('layouts.app')

@section('template_title')
    Create Footer Content
@endsection

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Contenido footer'])
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Footer Content</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('footer-content.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('footer-content.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

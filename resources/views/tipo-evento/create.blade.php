@extends('layouts.app')

@section('template_title')
    Crear Tipo Evento
@endsection

@section('content')
    <section class="content container-fluid mt-3">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Tipo Evento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipo-eventos.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipo-evento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

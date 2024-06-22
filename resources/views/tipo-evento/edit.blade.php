@extends('layouts.app')

@section('template_title')
    Actualizar Tipo Evento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Tipo Evento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipo-eventos.update', $tipoEvento->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tipo-evento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

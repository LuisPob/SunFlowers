@extends('layouts.app')

@section('template_title')
    {{ $tipoEvento->name ?? 'Mostrar Tipo Evento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Tipo Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-eventos.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tipoEvento->name }}
                        </div>
                        <div class="form-group">
                            <strong>Slug:</strong>
                            {{ $tipoEvento->slug }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

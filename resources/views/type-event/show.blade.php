@extends('layouts.app')

@section('template_title')
    {{ $typeEvent->name ?? 'Show Type Event' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Type Event</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('type-events.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $typeEvent->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

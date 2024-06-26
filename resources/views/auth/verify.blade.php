@extends('layouts.app-simple')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu correo') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Un enlace de verificación ha sido enviado a tu correo.') }}
                    </div>
                    @endif

                    {{ __('Antes de continuar, por favor revisa en tu correo el enlace de verificación.') }}
                    {{ __('Si no recibiste el correo') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('haz click aquí para solicitar otro') }}</button>.
                    </form>
                    <!-- boton para cerrar sesion  -->
                    <a href="{{ route('shop') }}" class="btn btn-light-danger">Continuar en la tienda</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
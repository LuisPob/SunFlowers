@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
        @include('layouts.navbars.auth.profilenav')
    </div>
</div>
<div id="alert">
    @include('components.alert')
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                @if(!empty($compras))
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Número</th>
                                <th>ID Recibo</th>
                                <th>Total</th>
                                <th>Fecha Compra</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($compras as $index => $compra)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $compra['id'] }}</td>
                                <td>{{ $compra['total'] }}</td>
                                <td>{{ $compra['created_at'] }}</td>
                                <td>
                                    <a href="{{ route('view.recibo', $compra['id']) }}" class="btn btn-primary btn-sm">Ver PDF</a>
                                    <form action="{{ route('send.recibo', $compra['id']) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-secondary btn-sm">Enviar por correo</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <center>
                    <h5 class="m-5" style="color: #67748e;">Usted no ha realizado compras</h5>
                </center>

                @endif

            </div>
        </div>
    </div>
</div>
@include('layouts.footers.auth.footer')
</div>

@endsection
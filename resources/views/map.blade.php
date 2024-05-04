@extends('layouts.app')

@section('content')
<h1>Mapa con Marcadores</h1>
    <div id="map"></div>

    <h2>Marcadores</h2>
    <ul>
        @foreach($markers as $marker)
            <li>{{ $marker->name }} ({{ $marker->latitude }}, {{ $marker->longitude }})</li>
        @endforeach
    </ul>

    <h2>CRUD de Marcadores</h2>
    <a href="{{ route('map-markers.index') }}">Ver todos los marcadores</a><br>
    <a href="{{ route('map-markers.create') }}">Crear nuevo marcador</a>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-36.79828, -73.05539], 16);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        @foreach($markers as $marker)
            L.marker([{{ $marker->latitud }}, {{ $marker->longitud }}]).addTo(map)
                .bindPopup('{{ $marker->name }}');
        @endforeach
    </script>
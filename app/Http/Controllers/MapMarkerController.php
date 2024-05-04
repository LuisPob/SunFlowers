<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MapMarker;

class MapMarkerController extends Controller
{
    public function index()
    {
        $markers = MapMarker::all();
        return view('map-markers.index', compact('markers'));
    }

    public function create()
    {
        return view('map-markers.create');
    }

    public function store(Request $request)
    {
        $marker = new MapMarker();
        $marker->nombre = $request->nombre;
        $marker->latitud = $request->latitud;
        $marker->longitud = $request->longitud;
        $marker->horario =$request->horario;
        $marker->save();

        return redirect()->route('map-markers.index');
    }

    public function edit(MapMarker $marker)
    {
        return view('map-markers.edit', compact('marker'));
    }

    public function update(Request $request, MapMarker $marker)
    {
        $marker->nombre = $request->nombre;
        $marker->latitud = $request->latitud;
        $marker->longitud = $request->longitud;
        $marker->horario = $request->horario;
        $marker->save();

        return redirect()->route('map-markers.index');
    }

    public function destroy(MapMarker $marker)
    {
        $marker->delete();
        return redirect()->route('map-markers.index');
    }
}